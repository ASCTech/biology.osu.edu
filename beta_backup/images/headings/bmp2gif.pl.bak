#!/usr/bin/perl -w

use strict; use warnings;

use Tk::Photo;

my $image = MainWindow->new->Photo;

foreach (<*.bmp>) {
	s/\.bmp$//;
	$image->read("$_.bmp", -format=>'bmp', -shrink);
	$image->write("$_.gif", -format=>'gif');
}