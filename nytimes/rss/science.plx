#!perl

##########
#
#  NB:  C:\Perl\site\lib\XML\RSS\JavaScript.pm was modified for this to work.
#       The as_javascript method in particular.  See that file for details.
#
##########

use strict;
use warnings;

use XML::RSS::JavaScript;
use LWP::Simple;

use Fatal qw( open );

my $url   = 'http://www.nytimes.com/services/xml/rss/nyt/Science.xml';
my $cache = 'science.js';

if (age($cache) > 5 * 60) {
	my $xml = get($url);
	my $rss = XML::RSS::JavaScript->new();
    $rss->parse($xml);
    my $js = $rss->as_javascript(0, 1);
    if (length $js) {
	    open(my $fh, '>', $cache);
	    print {$fh} $js;
	    close($fh);
    }
    print $js;
}
else {
	open(my $fh, '<', $cache);
	print while <$fh>;
	close($fh);
}

sub age   {  time  -  mtime($_[0])   }
sub mtime { -e $_[0] ? (stat $_[0])[9] : 0 }