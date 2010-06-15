<?

$instructors = array(
  'Summer 2010' => array(
    101 => array('cogan.1', 'smock.18'),
    102 => array('taylor.69', 'santangelo.11'),
    113 => array('rothacker.1'),
    114 => array('olson.133'),
  ),
  'Spring 2010' => array(
    101 => array('cogan.1', 'chordas.2', 'taylor.69'),
    102 => array('rissing.2', 'taylor.69'),
    113 => array('stetson.1'),
    114 => array('cooley.196'),
    115 => array('dean.10'),
    116 => array('wilson.1457'),
    402 => array('breitenberger.1', 'freudenstein.1'),
  ),
  'Winter 2010' => array(
    101 => array('cogan.1', 'wenzel.12', 'taylor.69'),
    102 => array('andrews.171', 'reeve.2', 'santangelo.11'),
    113 => array('swenson.1', 'weinstein.41'),
    114 => array('taylor.69'),
    115 => array('ding.35', 'simcox.1'),
    116 => array('hetherington.1'),
    401 => array('breitenberger.1', 'ridgway.14', 'johnson.2'),
    402 => array('herbers.4', 'seeger.9'),
  ),
  'Autumn 2009' => array(
    101 => array('chordas.2', 'cogan.1', 'fisher.14', 'taylor.69'),
    102 => array('andrews.171', 'reeve.2', 'sovic.1'),
    113 => array('chang.108', 'weinstein.41'),
    114 => array('taylor.69'),
    115 => array('stetson.1'),
    116 => array('boerner.1'),
    401 => array('breitenberger.1', 'ridgway.14', 'klompen.1'),
  ),
  'Summer 2009' => array(
    101 => array('rothacker.1', 'taylor.69'),
    102 => array('raczkowski.2', 'santangelo.11'),
    113 => array('breitenberger.1', 'cogan.1'),
    114 => array('kovach.71'),
    115 => array('NA'),
    116 => array('NA')
  ),
  'Spring 2009' => array(
    101 => array('andrews.171', 'chordas.2', 'cogan.1'),
    102 => array('rissing.2', 'taylor.69', 'hurdzan.3'),
    113 => array('waddell.48', 'swenson.1'),
    114 => array('taylor.69'),
    115 => array('breitenberger.1', 'stetson.1'),
    116 => array('wilson.1457'),
  ),
  'Winter 2009' => array(
    101 => array('andrews.171', 'chordas.2', 'taylor.69'),
    102 => array('reeve.2', 'taylor.69', 'santangelo.11'),
    113 => array('cogan.1'),
    114 => array('hetherington.1'),
    115 => array('ding.35', 'simcox.1'),
    116 => array('boerner.1'),
  ),
  'Autumn 2008' => array(
    101 => array('fisher.14', 'chordas.2', 'cogan.1', 'taylor.69'),
    102 => array('reeve.2', 'stetson.1', 'rothacker.1'),
    113 => array('cogan.1'),
    114 => array('taylor.69'),
    115 => array('dean.10'),
    116 => array('NA')
  ),
  'Summer 2008' => array(
    101 => array('baker.2', 'chordas.2'),
    102 => array('taylor.69', 'santangelo.11'),
    113 => array('cogan.1', 'breitenberger.1'),
    114 => array('kovach.71'),
    115 => array('NA'),
    116 => array('NA')
  ),
  'Spring 2008' => array(
    101 => array('cogan.1', 'stetson.1', 'chordas.2'),
    102 => array('rissing.2', 'nunley.3', 'taylor.69'),
    113 => array('scholl.1', 'swenson.1'),
    114 => array('taylor.69'),
    115 => array('NA'),
    116 => array('wilson.1457'),
  ),
  'Winter 2008' => array(
    101 => array('lanno.1', 'wenzel.12', 'taylor.69'),
    102 => array('reeve.2', 'gough.21', 'chordas.2'),
    113 => array('weinstein.41', 'cogan.1'),
    114 => array('hetherington.1'),
    115 => array('ding.35', 'simcox.1'),
    116 => array('boerner.1'),
  ),
  'Autumn 2007' => array(
    101 => array('baker.2', 'fisher.14', 'cogan.1', 'chordas.2'),
    102 => array('reeve.2'),
  ),
);


function instructors($course) {
  global $instructors;
  $chunkd = array_chunk($instructors,2,true);
  $recent = $chunkd[0];
  
  echo '<table class="instructors"><tr>';
  foreach ($recent as $quarter => $teachers) {
    echo "<th>Teaching in $quarter</th>";
  }
  echo '</tr><tr>';
  foreach ($recent as $quarter => $teachers) {
    $teachers = $teachers[$course];
    echo '<td>';
    while ($teacher = array_shift($teachers)) {
      include "instructors/$teacher.inc";
      if (count($teachers)) echo '<div class="hr"><hr /></div>';
    }
    echo '</td>';
  }
  echo '</tr></table>';
}

?>
