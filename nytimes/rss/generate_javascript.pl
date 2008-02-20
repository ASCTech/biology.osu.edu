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
use LWP::Simple qw( mirror );

use Fatal qw( open );

my $xml_url  = 'http://www.nytimes.com/services/xml/rss/nyt/Science.xml';
my $xml_file = 'science.xml';
my $js_file  = 'science.js';
my $number_of_headlines = 4;
my $include_descriptions = 1;

if (download($xml_url, $xml_file)) {
  my $xml = read_file($xml_file);
  my $js = xml2js($xml);
  write_file($js_file, $js) if $js;

  append(mtime($xml_file), 'mtimes.log');
}
exit;

sub xml2js {
  my $xml = shift;
  my $rss = XML::RSS::JavaScript->new;
  $rss->parse($xml);
  return $rss->as_javascript($number_of_headlines, $include_descriptions);
}

sub download {
  my ($url, $file) = @_;
  my $timestamp = mtime($file);
  mirror($url, $file);
  return $timestamp != mtime($file);
}

sub mtime {
  my $file = shift;
  return -e $file ? (stat $file)[9] : 0;
}

sub read_file {
  my $file = shift;
  my $content;
  open(my $fh, '<', $file);
  {
    local $/;
    $content = <$fh>;
  }
  close($fh);
  return $content;
}

sub write_file {
  my $file = shift;
  open(my $fh, '>', $file);
  print {$fh} @_;
  close($fh);
}

sub append {
  my ($line, $file) = @_;
  open(my $fh, '>>', $file);
  print {$fh} "$line\n";
  close($fh);
}
