#!/usr/bin/perl

use strict;
use warnings;

use DateTime;

use Fatal qw( open );


my $mtimes_file = 'mtimes.log';
my $old_mtimes_file = 'mtimes.log.old';

open(my $in_fh,  '<',  $mtimes_file);
open(my $out_fh, '>>', $old_mtimes_file);
while (my $time = <$in_fh>) {
  print {$out_fh} $time;
  my $dt = DateTime->from_epoch(epoch => $time);
  next if 4 < $dt->min and $dt->min < 10;
  print $dt->ymd, "\t", $dt->hms, "\n";
#  print $dt, '  ', ((4 < $dt->min and $dt->min < 10) ? 'ok' : 'bad'), "\n";
}
close($in_fh);
close($out_fh);

# perl's truncate doesn't seem to work on this system
do {open(my $fh, '>', $mtimes_file); close($fh);}
