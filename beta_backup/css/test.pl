#!/usr/bin/perl -w

use strict; use warnings;

use IO::Pipe;

my $pipe = IO::Pipe->new;

$pipe->writer;

print $pipe->autoflush, "\n";print $pipe->autoflush, "\n";print $pipe->autoflush, "\n";