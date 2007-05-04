<?
include 'ibp.inc';

function staff($people) {
	$n = 0;
?>
<table class="staff" cellspacing="0" cellpadding="0" border="0">
 <tr>
  <th />
  <th>Position</th>
  <th>Email</th>
  <th>Phone</th>
 </tr>
<? while ($person = array_shift($people)): ?>
 <tr class="r<?= $n = 1 - $n ?>">
<? while ($datum = array_shift($person)): ?>
  <td><?= $datum ?></td>
<? endwhile; ?>
 </tr>
<? endwhile; ?>
</table>
<?
}

top('Staff Directory', 1);

staff(
array(
 array('Richard Hall, Ph.D.',  'Interim Director',                   'hall.32@osu.edu',         '(614) 292-4793'),
 array('Kathy Royer',          'Office Manager',                     'royer.1@osu.edu',         '(614) 292-0535'),
 array('Rosemarie Thornton',   'Office Associate',                   'thornton.2@osu.edu',      '(614) 292-9861'),
 array('Jennifer Kaschner',    'Course Coordinator (101)',           'kaschner.2@osu.edu',      '(614) 247-6345'),
 array('Tiffany Langenderfer', 'Assistant Course Coordinator (101)', 'langenderfer.19@osu.edu', '(614) 247-8087'),
 array('Matt Misicka',         'Course Coordinator (102)',           'misicka.1@osu.edu',       '(614) 688-3466'),
 array('John Cogan, Ph.D.',    'Course Coordinator (113, H115)',     'cogan.1@osu.edu',         '(614) 292-4470'),
 array('Amy Kovach',           'Course Coordinator (114, H116)',     'kovach.71@osu.edu',       '(614) 292-3929'),
 array('Judy Ridgway, Ph.D.',  'Assessment Specialist',              'ridgway.14@osu.edu',      '(614) 292-0837'),
 array('Emily Jones',          'Learning Technology Coordinator',    'jones.1569@osu.edu',      '(614) 688-5495'),
 array('Michael Gee',          'Learning Technology Developer',      'gee.24@osu.edu',          '(614) 247-6576'),
));

bottom();

?>