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
       'title' => 'Assistant&nbsp;Director for Educational Research&nbsp;and&nbsp;Development',
       'email' => 'ridgway.14@osu.edu',
	   'phone' => '292-0837'),
 array('first' => 'Matt',
       'last'  => 'Misicka',
       'title' => 'Assistant&nbsp;Director for Introductory&nbsp;Biology &amp;&nbsp;Course&nbsp;Coordinator&nbsp;(102)',
       'email' => 'misicka.1@osu.edu',
	   'phone' => '688-3466'),
 array('first' => 'Kathy',
       'last'  => 'Royer',
       'title' => 'Office Manager',
       'email' => 'royer.1@osu.edu',
       'phone' => '292-0535'),
 array('first' => 'Rosemarie',
       'last'  => 'Thornton',
       'title' => 'Office&nbsp;Associate (Introductory&nbsp;Biology)',
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
       'title' => 'Office&nbsp;Associate (Academic&nbsp;Advising)',
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
       'title' => 'Associate&nbsp;Director, Honors&nbsp;Advisor',
	   'email' => 'stetson.1@osu.edu',
	   'phone' => '292-5307'),
 array('first' => 'Neil',
       'last'  => 'Baker',
       'title' => 'Associate Director',
	   'email' => 'baker.2@osu.edu',
	   'phone' => '292-3342'),
 array('first' => 'Tom',
       'last'  => 'Wilson',
       'title' => 'Honors Advisor',
	   'email' => 'wilson.1457@osu.edu',
	   'phone' => '247-6036'),
);

function cmp($a, $b) {
	$input = $sorted = array($a['last'], $b['last']);
	sort($sorted);
	return $input == $sorted ? -1 : 1;
}
usort($people, 'cmp');

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

.email a {
	text-decoration: none;
	color: black;
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
<?   while ($person = array_shift($people)): ?>
 <tr class="r<?= $n = 1 - $n ?>">
  <td class="name"><div><?= $person['first'] ?> <?= $person['last'] ?></div></td>
  <td class="title"><div><?= $person['title'] ?></div></td>
  <td class="email"><a href="mailto:<?= $person['first'] ?> <?= $person['last'] ?> <<?= $person['email'] ?>>"><?= $person['email'] ?></a></td>
  <td class="phone">(614) <?= $person['phone'] ?></td>
 </tr>
<?   endwhile; ?>
</table>
<? bottom(); ?>