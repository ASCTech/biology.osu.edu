<?
include 'ibp.inc';

function staff($people) {
	$n = 0;
?>
<table class="staff" cellspacing="0" cellpadding="0" border="0">
 <tr>
  <th/>
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
 array('Caroline Breitenberger',  'Director',
       'breitenberger.1@osu.edu', '(614) <span style="white-space:nowrap">292-6945</span>'),
 array('Judy Ridgway',            'Assistant&nbsp;Director (Assessment&nbsp;&amp;&nbsp;Pedagogy)',
       'ridgway.14@osu.edu',      '(614) <span style="white-space:nowrap">292-0837</span>'),
 array('Matt Misicka',            'Assistant&nbsp;Director (Introductory&nbsp;Biology)<br/>&nbsp; &amp; Course Coordinator (102)',
       'misicka.1@osu.edu',       '(614) <span style="white-space:nowrap">688-3466</span>'),
 array('Kathy Royer',             'Office Manager',
       'royer.1@osu.edu',         '(614) <span style="white-space:nowrap">292-0535</span>'),
 array('Rosemarie Thornton',      'Office Associate',
       'thornton.2@osu.edu',      '(614) <span style="white-space:nowrap">292-9861</span>'),
 array('Adam Andrews',            'Course Coordinator (101)',
       'andrews.171@osu.edu',     '(614) <span style="white-space:nowrap">247-6345</span>'),
 array('Tiffany Langenderfer',    'Assistant Course Coordinator (101)',
       'langenderfer.19@osu.edu', '(614) <span style="white-space:nowrap">247-8087</span>'),
 array('Betsy Wrobel-Boerner',    'Course Coordinator (113,&nbsp;H115)',
       '<span style="white-space:nowrap">wrobel-boerner.1@osu.edu</span>',
                                  '(614) <span style="white-space:nowrap">688-5495</span>'),
 array('Amy Kovach',              'Course Coordinator (114,&nbsp;H116)',
       'kovach.71@osu.edu',       '(614) <span style="white-space:nowrap">292-3929</span>'),
 array('Michael Gee',             'Learning Technology',
       'gee.24@osu.edu',          '(614) <span style="white-space:nowrap">247-6576</span>'),
));

bottom();

?>