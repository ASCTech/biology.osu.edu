
use strict;
use warnings;

use CGI qw/:standard -nph/;

use DBIx::Abstract;
my $db = DBIx::Abstract->connect({driver=>'mysql', dbname=>'ibp', host=>'hooke.biosci.ohio-state.edu', user=>'devel', password=>'sFqprZCdYUzGjGbP'});

my $referer = referer || '';
my $ip = remote_host || '';
my $link = url_param('link') || 1;
my $self = url || '';

my $to = $db->select_one_to_hashref('url', 'redirection_links', {id=>$link});
if ($to) {
	$to = $to->{'url'};
	$db->insert('redirection_clicks', {referer=>$referer, redirecter=>$self, link=>$link, ip=>$ip});

	print header, <<"HTML_END";
<html>
<head>
<script language="javascript">
<!--
top.location.href="$to";
// -->
</script>
</head>
<body>
<p>Please click this link:</p>
<a href="$to" target="_top">$to</a>
</html>
HTML_END

} else {
	print header, '<h1>Invalid Link</h1>';
}