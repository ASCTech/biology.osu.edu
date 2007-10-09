<?
chdir('../..');
include_once 'lib/basics.inc';
top('Staff Directory');
no_menu();

include_once 'contact/staff/directory.inc';
uksort($directory, 'strnatcmp');

$n = 0;
?>

<style type="text/css">
#singlecolumn td, #singlecolumn th {
	padding: 3px;
	padding-left: 1em;
	vertical-align: top;
	text-align: left;
}

#singlecolumn tr td:first-child {
	padding-left: 3px;
}

#singlecolumn tr.r1 {
	background-color: #E5E5E5;
}

#singlecolumn tr.r0 {
	background-color: white;
}

.name div, .title div {
	text-indent: -0.5em;
	padding-left: 0.5em;
}

.name a, .email a {
	text-decoration: none;
	color: black;
}

.name a:hover, .email a:hover {
	text-decoration: underline;
}

.email, .phone {
	white-space: nowrap;
}
</style>

<table cellspacing="0" cellpadding="0" border="0">
 <tr>
  <th/>
  <th>Position</th>
  <th>Email</th>
  <th>Phone</th>
 </tr>
<?   while (list($username,$person) = each($directory)): ?>
 <tr class="r<?= $n = 1 - $n ?>">
  <td class="name"><div><a href="contact/staff/member.php?username=<?= $username ?>"><?= $person['first'] ?> <?= $person['last'] ?></a></div></td>
  <td class="title"><div><?= $person['title'] ?></div></td>
  <td class="email"><a href="mailto:<?= $person['first'] ?> <?= $person['last'] ?> <<?= $username ?>@osu.edu>"><?= $username ?>@osu.edu</a></td>
  <td class="phone">(614) <?= $person['phone'] ?></td>
 </tr>
<?   endwhile; ?>
</table>
<? bottom(); ?>