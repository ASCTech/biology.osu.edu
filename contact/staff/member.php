<?
chdir('../..');
include_once 'lib/basics.inc';
$username = $_GET{username};
include_once 'contact/staff/directory.inc';
if (!array_key_exists($username,$directory))
  header('Location: '.$base.'contact/staff');
$person = $directory{$username};
top('Staff',$person['first'].' '.$person['last']);
no_menu();
?>

<style type="text/css">
#businesscard, #extrainfo {
	float: left;
	font-family: Georgia, serif;
	font-size: 12pt;
	margin-bottom: 2em;
}
#businesscard {
	white-space: nowrap;
	border: 1px solid #BEBFBF;
	padding: 0.5em;
}
#name {
	font-weight: bold;
}
#address, #officephonefaxemail {
	margin-top: 0.7em;
}
#office th, #office td {
	padding-bottom: 0.7em;
}
#address #city, #address #state, #address #zip {
	display: inline;
}
#address #zip {
	margin-left: 0.4em;
}
#officephonefaxemail th {
	font-weight: normal;
	text-align: left;
	padding-right: 1em;
}
#officephonefaxemail a {
	color: black;
	text-decoration: none;
}
#officephonefaxemail a:hover {
	text-decoration: underline;
}

#extrainfo {
	margin-left: 2em;
}

#extrainfo h1, #extrainfo h2, #extrainfo h3, #extrainfo h4, #extrainfo h5 {
	text-align: left;
	margin: 0;
	padding: 0;
/*	margin-top: 1em;*/
}
#extrainfo h1 { font-size: 16pt; }
#extrainfo h2 { font-size: 15pt; }
#extrainfo h3 { font-size: 14pt; }
#extrainfo h4 { font-size: 13pt; }
#extrainfo h5 { font-size: 12pt; }

#extrainfo div {
    margin: 1em 0 1em 0.5em;
}

</style>

<div id="businesscard">
<div id="name"><?= $person['first'] ?> <?= $person['last'] ?></div>
<div id="title"><?= $person['title'] ?></div>
<div id="department">Center for Life Sciences Education</div>
<div id="address">
  <div id="line1"><?= array_key_exists('address1',$person) ? $person['address1'] : '260 Jennings Hall' ?></div>
  <div id="line2"><?= array_key_exists('address2',$person) ? $person['address2'] : '1735 Neil Avenue' ?></div>
  <div id="city"><?=  array_key_exists('city',$person)     ? $person['city']     : 'Columbus' ?>,</div>
  <div id="state"><?= array_key_exists('state',$person)    ? $person['state']    : 'OH' ?></div>
  <div id="zip"><?=   array_key_exists('zip',$person)      ? $person['zip']      : '43210&ndash;1106' ?></div>
</div>
<table id="officephonefaxemail" border="0" cellpadding="0" cellspacing="0">
<? if (array_key_exists('office',$person)) { ?><tr id="office"><th>Office</th><td><?= $person['office'] ?></td></tr><? } ?>
  <tr><th>Phone</th><td><?= array_key_exists('phone',$person) ? '(614) '.$person['phone'] : '(614) 292-9861' ?></td></tr>
  <tr><th>Fax</th><td><?= array_key_exists('fax',$person) ? $person['fax'] : '(614) 292-4390' ?></td></tr>
  <tr><th>Email</th><td><a href="mailto:<?= $person['first'] ?> <?= $person['last'] ?> <<?= $username ?>@osu.edu>"><?= $username ?>@osu.edu</a></td></tr>
</table>
</div>

<? 
chdir('contact/staff');
if (file_exists("$username.inc")) {
?>
<div id="extrainfo">
<? include("$username.inc"); ?>
</div>
<?
}

bottom();
?>