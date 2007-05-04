#!/usr/bin/perl -w

use strict; use warnings;

use File::Copy;

my $dir = 1 ? 'C:/Inetpub/wwwroot/biology.osu.edu' : 'W:/biology.osu.edu';

my @modified_files = qw{
};

$|++;

foreach my $file (@modified_files) {
	chomp($file);
	next unless $file;
	my $src = "$dir/beta/$file";
	my $dst = "$dir/$file";
	print "Copying $src to $dst ... ";
	if (copy $src => $dst) {
		print "success\n";
	} else {
		print "failed: $!\n";
	}
}
