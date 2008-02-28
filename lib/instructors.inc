<?

$instructors = array(
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
	
	echo '<table class="instructors" cellspacing="0" cellpadding="0" border="0"><tr>';
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
