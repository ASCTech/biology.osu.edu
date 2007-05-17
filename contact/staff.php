<?
chdir('..');
include_once 'lib/basics.inc';
top('Staff Directory');
no_menu();

$people = array(
 array('name' => 'Caroline Breitenberger',
       'title' => 'Director',
       'email' => 'breitenberger.1@osu.edu',
       'phone' => '292-6945'),
 array('name' => 'Judy Ridgway',
       'title' => 'Assistant&nbsp;Director (Assessment&nbsp;&amp;&nbsp;Pedagogy)',
       'email' => 'ridgway.14@osu.edu',
	   'phone' => '292-0837'),
 array('name' => 'Matt Misicka',
       'title' => 'Assistant&nbsp;Director (Introductory&nbsp;Biology)<br/>&nbsp; &amp; Course Coordinator (102)',
       'email' => 'misicka.1@osu.edu',
	   'phone' => '688-3466'),
 array('name' => 'Kathy Royer',
       'title' => 'Office Manager',
       'email' => 'royer.1@osu.edu',
       'phone' => '292-0535'),
 array('name' => 'Rosemarie Thornton',
       'title' => 'Office Associate',
       'email' => 'thornton.2@osu.edu',
       'phone' => '292-9861'),
 array('name' => 'Adam Andrews',
       'title' => 'Course Coordinator (101)',
       'email' => 'andrews.171@osu.edu',
       'phone' => '247-6345'),
 array('name' => 'Tiffany Langenderfer',
       'title' => 'Assistant Course Coordinator (101)',
       'email' => 'langenderfer.19@osu.edu',
       'phone' => '247-8087'),
 array('name' => 'Betsy Wrobel-Boerner',
       'title' => 'Course Coordinator (113,&nbsp;H115)',
       'email' => 'wrobel-boerner.1@osu.edu',
	   'phone' => '688-5495'),
 array('name' => 'Amy Kovach',
       'title' => 'Course Coordinator (114,&nbsp;H116)',
       'email' => 'kovach.71@osu.edu',
       'phone' => '292-3929'),
 array('name' => 'Michael Gee',
       'title' => 'Learning Technology',
       'email' => 'gee.24@osu.edu',
       'phone' => '247-6576'),
);

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
  <td><?= $person['name'] ?></td>
  <td><?= $person['title'] ?></td>
  <td><span style="white-space:nowrap"><a href="mailto:<?= $person['name'] ?> <<?= $person['email'] ?>>" class="email"><?= $person['email'] ?></a></span></td>
  <td>(614) <span style="white-space:nowrap"><?= $person['phone'] ?></span></td>
 </tr>
<?   endwhile; ?>
</table>
<? bottom(); ?>