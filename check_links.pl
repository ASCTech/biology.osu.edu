#!/usr/bin/perl

use strict;
use warnings;

use LWP::UserAgent;
use HTML::LinkExtor;
use URI::URL;


my $front_page = shift || 'http://localhost/~michaelgee/biology.osu.edu/';
my $ua = LWP::UserAgent->new;

my (%unchecked, %good, %bad, @links);

my $parser = HTML::LinkExtor->new(
  sub {
    my ($tag, %attr) = @_;
    push @links, values %attr;
  }
);

sub next_unchecked { (keys %unchecked)[0] }

sub local_page {
  my $url = shift;
  return (split(/\?/, $url, 2))[0] =~ m{^$front_page.*(\.php|\.html|/)$};
}

sub status_line {
  my $url = shift;
  printf "% 3d to go   %s\n", scalar keys %unchecked, $url;
}

sub just_check {
  my $url = shift;
  status_line($url);
  delete $unchecked{$url};
  my $resp = $ua->head($url);
  $resp->is_success ? ($good{$url} = 1) : ($bad{$url} = 1);
}

sub extract_links {
  my $url = shift;
  status_line($url);
  delete $unchecked{$url};
  @links = ();
  my $resp = $ua->get($url, ':content_cb' => sub{$parser->parse($_[0])});
  if ($resp->is_success) {
    $good{$url} = 1;
    my $base = $resp->base;
    while (my $link = shift @links) {
      $link = url($link, $base)->abs;
      my $link_without_params = (split(/\?/,$link,2))[0];
      $link = $link_without_params if $link =~ m{^http://jigsaw.w3.org/};
      next if $good{$link} or $bad{$link} or $link =~ m{^mailto:};
      $unchecked{$link} = 1;
    }
  }
  else {
    $bad{$url} = 1;
  }
}

extract_links($front_page);
while (my $url = next_unchecked()) {
  local_page($url) ? extract_links($url) : just_check($url);
}

print "GOOD\n===========\n",
      join("\n", sort keys %good), "\n\n",
      "BAD\n===========\n",
      join("\n", sort keys %bad), "\n\n";
