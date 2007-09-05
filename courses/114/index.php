<?
chdir('../..');
include_once 'lib/basics.inc';
include_once 'lib/instructors.inc';
top('Biology 114');
menu('114');
?>
<h1>Biology 114: Form, Function, Diversity and Ecology</h1>
<p>Biology 114 is intended for students majoring in the natural sciences and is the continuation of
   Biology 113. In this course we deal mainly with the organismal and supra-organismal levels of
   biological organization. Evolution will be the unifying theme. The diversity, form, function, and
   ecology of organisms will be covered, with particular emphasis on plants and animals.</p>
<?
instructors(array('Summer 2007' => array('kovach.71'),
                  'Autumn 2007' => array('klompen.1'),
            )     );

bottom();
?>