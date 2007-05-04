#!perl -w

use strict;
use warnings;

use CGI;

my %params = CGI->new->Vars;

use Data::Dumper;

print Dumper(\%params);
