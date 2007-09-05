#!/usr/bin/perl -w

use strict; use warnings;

use Tk::Photo;
use File::Temp;

my $image = MainWindow->new->Photo;

$|++;
undef $/;
foreach (<*.bmp>) {
#    next unless /Major/;
	s/\.bmp$//;
	print "$_\n";
	my ($bmp, $gif) = ("$_.bmp", "$_.gif");
	$image->read($bmp, -format=>'bmp', -shrink);
	$image->write($gif, -format=>'gif');
}
