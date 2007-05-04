#!/usr/bin/perl

use strict; use warnings;

use CGI qw(-nph :standard *table *Tr *td *pre);
use File::Basename;
use Text::CSV_XS;

my $csv = Text::CSV_XS->new;

my $versions = param('versions');
my @fh = map {upload("i2c$_")} 1 .. $versions || 0;
my $name = param('i2c_name');

sub all { $_ || return 0 for @_; 1 }

my $error = 0;
sub error { print header,start_html,h2(shift),end_html; $error++; }

if (my $fh = upload('c2i')) {

	my $filename = (fileparse(param('c2i'), qr/\.(txt|csv)/i))[0];
	$filename .= ' (for IOWA).csv';
	if ($csv->parse(scalar <$fh>)) {
		my @columns = $csv->fields;
		@columns = map { m/Username/i ? 'User ID' : $_ }
		           map { m/(.*) Out Of Grade/ ? $1 : $_ }
		           map { m/(.*) Grade Symbol String/ ? $1 : $_ }
		           @columns;
		print header(-type=>'text/csv',-attachment=>$filename),
		      join(',', @columns), "\n";
		while (<$fh>) {
			s/#//g;
			s/"//g;
			print;
		}
	} else {
		error('The file is not valid CSV data.');
	}

} elsif ($versions and scalar @fh == $versions and all(@fh, $name)) {

	my $filename = "$name (for Carmen).csv";
	my $error_msg = 'You submitted a file that does not contain valid CSV data.';
	my $output = "StudentID,Username,$name Out Of Grade\n";
	FILE:
	foreach my $fh (@fh) {
		if ($csv->parse(scalar<$fh>)) {
			LINE:
			while (<$fh>) {
				if ($csv->parse($_)) {
					$output .= join(',', '', ($csv->fields)[0,1]) . "\n";
				} else {
					error($error_msg);
				}
			}
		} else {
			error($error_msg);
		}
	}
	print header(-type=>'text/csv',-attachment=>$filename), $output unless $error;

} else {

	my $title = 'Convert Carmen data to IOWA or vice-versa';
	my $js = 'javascript:document.form1.submit()';

	print header,
	      start_html(-title=>$title, -style=>'convert.css'),
	      p({-class=>'pad'}),
	      start_form(-name=>'form1'),
	      'Conversion Type: ',
	      popup_menu(-name=>'direction',
	                 -values=>['Select:', 'Carmen to IOWA', 'IOWA to Carmen'],
	                 -onChange=>$js);

	if (my $dir = param('direction')) {
		print br,br,br;
		if ($dir eq 'Carmen to IOWA') {
			print end_form,start_multipart_form(-name=>'form2'),
			      'Carmen File: ', filefield('c2i'),
			      br,br,submit('Convert'),end_form;
		} elsif ($dir eq 'IOWA to Carmen') {
			print 'Number of Test Versions: ',
			      popup_menu(-name=>'versions', -values=>['Select:',1..4], -onChange=>$js),
			      end_form;
			if ($versions and $versions ne 'Select:') {
				print br,br,
				      start_multipart_form(-name=>'form2'),
				      'Column name in Carmen: ',textfield('i2c_name'),
				      br,br,br,'Files from IOWA:';
				foreach my $v (1 .. $versions) {
					print br,br,filefield("i2c$v");
				}
				print br,br,submit('Convert'),hidden('versions',$versions),end_form;
			}
		}
	} else {
		print end_form;
	}

	print end_html;
}