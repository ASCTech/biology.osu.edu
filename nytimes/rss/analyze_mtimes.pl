#!/usr/bin/perl

use strict;
use warnings;

use DateTime;

use Fatal qw( open );


my $mtimes_file = 'mtimes.log';

open(my $fh, '<', $mtimes_file);
while (my $time = <$fh>) {
  my $dt = DateTime->from_epoch(epoch => $time);
  next if 4 < $dt->min and $dt->min < 10;
  print $dt->ymd, "\t", $dt->hms, "\n";
#  print $dt, '  ', ((4 < $dt->min and $dt->min < 10) ? 'ok' : 'bad'), "\n";
}
close($fh);
