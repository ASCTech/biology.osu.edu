<?
chdir('../..');
include_once 'lib/basics.inc';
include_once 'lib/instructors.inc';
top('Biology 101');
menu('101');
?>
<h1>Biology 101: Introduction to Biology</h1>
<p>Biology 101 is a course specifically designed with the non-biology major in mind. Over the course
   of a quarter, students will be exposed to a variety of topics, including: the nature and history
   of scientific study, organismal diversity, evolution, ecology, genetics, reproduction, cell
   structure and function, and scientific literacy. Our course is taught by faculty from all areas of
   biological study, each bringing their own views, experiences, and ideas to the classroom.</p>
<u>Students in Biology 101 Should</u>:
<ul>
 <li>Gain insight to problem-solving as a team effort through cooperative, inquiry-based learning in
     the laboratory, and in-class exercises,</li>
 <li>Discover the power of scientific objectivity and curiosity as demonstrated in biology,</li>
 <li>Develop an appreciation of science as a cumulative, investigative process by learning about the
     history of key discoveries in biology,</li>
 <li>Improve communication skills including; teamwork, research and modeling,</li>
 <li>Achieve self-confidence in forming opinions and evaluating scientific propositions,</li>
 <li>Integrate existing knowledge of their particular disciplines with their learning of biology,</li>
 <li>Build a framework for knowledge upon which they can continue to integrate new information,</li>
 <li>Increase their scientific literacy and interest in life long learning of biology.</li>
</ul>
<p>We would like each and every student to come away from Biology 101 with knowledge and experiences
   that will be useful in their future endeavors.</p>

<?
instructors(array('Summer 2007' => array('baker.2', 'chordas.2'),
                  'Autumn 2007' => array('baker.2', 'fisher.14', 'chordas.2'),
            )     );

bottom();
?>