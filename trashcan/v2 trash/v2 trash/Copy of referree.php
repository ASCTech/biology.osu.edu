<?

$self = $_SERVER['PHP_SELF'];
$referer = $_SERVER['HTTP_REFERER'];
$redirect = 'http://biology.osu.edu/v2/';
$webmaster = 'gee.24@osu.edu';

$ip = '140.254.6.141';
$port = 32333;
$password = 'Jc68NNSwHy6Vqn6d';

error_reporting(0);

$socket = fsockopen("tcp://$ip", $port, $errno, $errstr, 5);

if ($socket) {
	fwrite($socket, "$password\n$self\n$referer\n$redirect\n");
	fclose($socket);
} else {
	$message = "$self couldn't connect to the Referer Logger at $ip:$port\nI got this error '$errstr ($errno)'\n\nHere's what I would have logged:\nPage Referenced: $self\nReferer: $referer\nRedirected to: $redirect\n";
	mail($webmaster, 'Referer Logger is down', $message);
}

header("Location: $redirect");

?>