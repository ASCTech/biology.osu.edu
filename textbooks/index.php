<?
$quarters = preg_grep('/\A\d{5}\.php\Z/', scandir('.'));
rsort($quarters);
$page = $quarters[0];

$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
header("Location: http://$host$uri/$page");
?>