#!/usr/local/bin/perl

##########
#
#  NB:  XML/RSS/JavaScript.pm was modified for this to work.
#       The as_javascript method in particular.
#       use HTML::Entities;
#       and s/$self->_encode/encode_entities/g
#
##########

use strict;
use warnings;

use XML::RSS::JavaScript;
use LWP::Simple;

use Fatal qw( open );

my $url   = 'http://www.nytimes.com/services/xml/rss/nyt/Science.xml';
my $cache = 'science.js';

my $xml = get($url);
my $rss = XML::RSS::JavaScript->new();
$rss->parse($xml);
my $js = $rss->as_javascript(0, 1);
if (length $js) {
  open(my $fh, '>', $cache);
  print {$fh} $js;
  close($fh);
}
