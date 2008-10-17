<?
chdir('../..');
require_once 'lib/basics.inc';
$username = $_GET{username};
require_once 'contact/staff/directory.inc';
if (!array_key_exists($username,$directory))
  header('Location: '.$base.'contact/staff');
$person = $directory{$username};
top('Staff',$person['first'].' '.$person['last']);
no_menu();
?>

<div id="businesscard">
<div id="name"><?= $person['first'] ?> <?= $person['last'] ?><?= array_key_exists('suffix', $person) ? $person['suffix'] : '' ?></div>
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
  <tr><th>Email</th><td><a href="mailto:<?= $person['first'] ?> <?= $person['last'] ?> &lt;<?= $username ?>@osu.edu&gt;"><?= $username ?>@osu.edu</a></td></tr>
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
