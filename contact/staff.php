<?
chdir('..');
include_once 'lib/basics.inc';
top('Staff Directory');
no_menu();

$people = array(
 array('first' => 'Caroline',
       'last'  => 'Breitenberger',
       'title' => 'Director',
       'email' => 'breitenberger.1@osu.edu',
       'phone' => '292-6945'),
 array('first' => 'Judy',
       'last'  => 'Ridgway',
       'title' => 'Assistant&nbsp;Director (Assessment&nbsp;&amp;&nbsp;Pedagogy)',
       'email' => 'ridgway.14@osu.edu',
	   'phone' => '292-0837'),
 array('first' => 'Matt',
       'last'  => 'Misicka',
       'title' => 'Assistant&nbsp;Director (Introductory&nbsp;Biology)<br/>&nbsp; &amp; Course Coordinator (102)',
       'email' => 'misicka.1@osu.edu',
	   'phone' => '688-3466'),
 array('first' => 'Kathy',
       'last'  => 'Royer',
       'title' => 'Office Manager',
       'email' => 'royer.1@osu.edu',
       'phone' => '292-0535'),
 array('first' => 'Rosemarie',
       'last'  => 'Thornton',
       'title' => 'Office Associate (Introductory Biology)',
       'email' => 'thornton.2@osu.edu',
       'phone' => '292-9861'),
 array('first' => 'Adam',
       'last'  => 'Andrews',
       'title' => 'Course Coordinator (101)',
       'email' => 'andrews.171@osu.edu',
       'phone' => '247-6345'),
 array('first' => 'Tiffany',
       'last'  => 'Langenderfer',
       'title' => 'Assistant Course Coordinator (101)',
       'email' => 'langenderfer.19@osu.edu',
       'phone' => '247-8087'),
 array('first' => 'Betsy',
       'last'  => 'Wrobel-Boerner',
       'title' => 'Course Coordinator (113,&nbsp;H115)',
       'email' => 'wrobel-boerner.1@osu.edu',
	   'phone' => '688-5495'),
 array('first' => 'Amy',
       'last'  => 'Kovach',
       'title' => 'Course Coordinator (114,&nbsp;H116)',
       'email' => 'kovach.71@osu.edu',
       'phone' => '292-3929'),
 array('first' => 'Michael',
       'last'  => 'Gee',
       'title' => 'Educational Systems Developer',
       'email' => 'gee.24@osu.edu',
       'phone' => '247-6576'),
 array('first' => 'Barbara',
       'last'  => 'Eakins',
       'title' => 'Office Associate (Academic Advising)',
	   'email' => 'eakins.16@osu.edu',
	   'phone' => '292-1704'),
 array('first' => 'David',
       'last'  => 'Wells',
       'title' => 'Academic Advisor',
	   'email' => 'wells.252@osu.edu',
	   'phone' => '292-1704'),
 array('first' => 'Peggy',
       'last'  => 'Strow',
       'title' => 'Academic Advisor',
	   'email' => 'strow.1@osu.edu',
	   'phone' => '292-1704'),
 array('first' => 'David',
       'last'  => 'Stetson',
       'title' => 'Associate Director',
	   'email' => 'stetson.1@osu.edu',
	   'phone' => '292-5307'),
);

function cmp($a, $b) {
	$input = $sorted = array($a['last'], $b['last']);
	sort($sorted);
	return $input == $sorted ? -1 : 1;
}
usort($people, 'cmp');

$n = 0;
?>
<table class="staff" cellspacing="0" cellpadding="0" border="0">
 <tr>
  <th/>
  <th>Position</th>
  <th>Email</th>
  <th>Phone</th>
 </tr>
<?   while ($person = array_shift($people)): ?>
 <tr class="r<?= $n = 1 - $n ?>">
  <td><?= $person['first'] ?> <?= $person['last'] ?></td>
  <td><?= $person['title'] ?></td>
  <td><span style="white-space:nowrap"><a href="mailto:<?= $person['first'] ?> <?= $person['last'] ?> <<?= $person['email'] ?>>" class="email"><?= $person['email'] ?></a></span></td>
  <td>(614) <span style="white-space:nowrap"><?= $person['phone'] ?></span></td>
 </tr>
<?   endwhile; ?>
</table>
<? bottom(); ?>