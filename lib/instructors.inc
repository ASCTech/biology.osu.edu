<?

function instructors($data) {
	foreach ($data as $quarter => $teacher_list) {
		$quarters[] = $quarter;
		$teacher_lists[] = $teacher_list;
	}
	echo '<table class="instructors" cellspacing="0" cellpadding="0" border="0"><tr>';
	foreach ($quarters as $quarter) {
		echo "<th>Teaching in $quarter</th>";
	}
	echo '</tr><tr>';
	foreach ($teacher_lists as $teacher_list) {
		echo '<td>';
		while ($teacher = array_shift($teacher_list)) {
			include "instructors/$teacher.inc";
			if (count($teacher_list)) echo '<div class="hr"><hr /></div>';
		}
		echo '</td>';
	}
	echo '</tr></table>';
}

?>
