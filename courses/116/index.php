<?
chdir('../..');
include_once 'lib/basics.inc';
include_once 'lib/instructors.inc';
top('Honors Biology 116');
menu('116');
?>
<h1>Biology 116: Honors II</h1>
<p>Biology H115-116 is a lecture, recitation and laboratory sequence in which interaction with
   research faculty and discussions are encouraged. The sequence deals with basic concepts and
   problems common to all forms of life, whether plant, animal, or microbe, with emphasis upon
   problem solving and experimental design. Biology H115 emphasizes molecular, cellular and
   developmental biology. Biology H116 continues comparative processes of organisms and progresses
   through ecological and evolutionary biology. There is a strong evolutionary theme throughout the
   two-quarter sequence.</p>

<?
instructors(array('Autumn 2007' => array('NA'),
                  'Winter 2008' => array('boerner.1'),
            )     );

bottom();
?>