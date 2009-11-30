<?
chdir('../..');
require_once 'lib/basics.inc';
top('Staff Directory');
no_menu();

require_once 'contact/staff/directory.inc';
uksort($directory, 'strnatcmp');

$n = 0;
?>

<table>
 <tr>
  <th/>
  <th>Position</th>
  <th>Email</th>
  <th>Phone</th>
 </tr>
<?   while (list($username,$person) = each($directory)): ?>
 <tr class="r<?= $n = 1 - $n ?>">
 <td class="name"><div><a href="contact/staff/member.php?username=<?= $username ?>"><?= $person['first'] ?> <?= $person['last'] ?><?= array_key_exists('suffix', $person) ? $person['suffix'] : '' ?></a></div></td>
  <td class="title"><div><?= $person['title'] ?></div></td>
  <td class="email"><a href="mailto:<?= $person['first'] . ' ' . $person['last'] . ' &lt;' . $username . '@osu.edu&gt;' ?>"><?= $username ?>@osu.edu</a></td>
  <td class="phone">(614) <?= $person['phone'] ?></td>
 </tr>
<?   endwhile; ?>
</table>
<? bottom(); ?>
