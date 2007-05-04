use lib 'D:/bin';

use IBP::Redirect;
use CGI qw/:standard -nph/;

my $referer = referer || '';
my $ip = remote_host || '';
my $to = url_param('to') || '';
my $name = url_param('name') || '';
my $self = url || '';

IBP::Redirect->insert({referer=>$referer, redirecter=>$self, destination=>$to, name=>$name, ip=>$ip});

print header, <<EOH;
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
EOH
