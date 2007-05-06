<?
chdir('../..');
include_once 'lib/basics.inc';
include_once 'lib/instructors.inc';
top('Honors Biology 115');
menu('115');
?>
<h1>Biology 115: Honors I</h1>
<p>Biology H115&ndash;116 is a lecture, recitation and laboratory sequence in which interaction with
   research faculty and discussions are encouraged. The sequence deals with basic concepts and
   problems common to all forms of life, whether plant, animal, or microbe, with emphasis upon
   problem solving and experimental design. Biology H115 emphasizes molecular, cellular and
   developmental biology. Biology H116 continues comparative processes of organisms and progresses
   through ecological and evolutionary biology. There is a strong evolutionary theme throughout the
   two-quarter sequence.</p>
<p>A major goal of this course is to demonstrate the relevance of biology to modern society. To
   help achieve this goal we included the following:</p>
<ul>
 <li>Invited guest speakers with expertise in specific areas at the interface of contemporary
     biology and society.</li>
 <li>A project based on regular reading of biology-related content in The New York Times. This
     project will involve collecting clippings of current articles, editorials, columns, letters to
     the editor and other items that address a topic of contemporary biological relevance to be
     determined in consultation with the TA.</li>
</ul>

<?
instructors(array('Winter 2007' => array('ding', 'simcox'),
                  'Spring 2007' => array('NA'),
            )     );

bottom();
?>