<?

$base = $_SERVER['SERVER_ADDR'] == $_SERVER['REMOTE_ADDR']
      ? 'http://localhost:8000/~michaelgee/biology.osu.edu/'
      : 'http://biology.osu.edu/';


$QT2Q = array(
	'WI' => 1,
	'SP' => 2,
	'SU' => 3,
	'AU' => 4,
);

function QTYR2YEARQ($QTYR) {
	$QT = substr($QTYR, 0, 2);
	$YR = substr($QTYR, 2, 2);
	$year = $YR > 50 ? 1900 + $YR : 2000 + $YR;
	$Q = $QT2Q[$QT];
	return 10 * $year + $Q;
}

$QT2Quarter = array(
	'WI' => 'Winter',
	'SP' => 'Spring',
	'SU' => 'Summer',
	'AU' => 'Autumn',
);

function QTYR2Quarter_Year($QTYR) {
	$QT = substr($QTYR, 0, 2);
	$YR = substr($QTYR, 2, 2);
	$year = $YR > 50 ? 1900 + $YR : 2000 + $YR;
	$Quarter = $QT2Quarter[$QT];
	return "$Quarter $year";
}

$url_map = array(
	'Center for Life Sciences Education' => $base,
	'Introductory Biology Program' => '/',
	'Biology 101' => 'courses/101/',
	'Biology 102' => 'courses/102/',
	'Biology 113' => 'courses/113/',
	'Biology 114' => 'courses/114/',
	'Honors Biology 115' => 'courses/115/',
	'Honors Biology 116' => 'courses/116/',
);

function top() {
	global $url_map, $base;
    $pages = func_get_args();
	if (count($pages) > 0) {
		array_unshift($pages, 'Center for Life Sciences Education');
	} else {
		$pages = array('Center for Life Sciences Education');
	}
	$title = implode(' - ', array_reverse($pages));
	if ($title) $title .= ' - ';
	$title .= 'The Ohio State University';
	$heading = '';
	foreach ($pages as $p) {
		if ($p) {
			$url = array_key_exists($p, $url_map) ? $url_map[$p] : 0;

			$clse = $p == 'Center for Life Sciences Education' ? 1 : 0;

			$h_img = str_replace(' ', '_', $p);
			$h_img = "images/headings/$h_img.gif";
			if (file_exists($h_img)) $p = '<img src="' . $h_img . '" alt="' . $p . '" border="0"/>';

			$heading .= '<span class="nobreak">';
			if (!$clse) $heading .= '<img class="arrow" src="images/arrow.gif" alt=""> ';
			$heading .= '<a ' . ($url ? 'href="' . $url . '" ' : '') . 'class="heading">' . $p . "</a>\n";
			$heading .= '</span>';
		}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title><?= $title ?></title>
<meta http-equiv="content-type" content="text/html; charset=us-ascii">
<meta name="robots" content="all">
<meta name="keywords" content="Biology, Center for Life Sciences Education, Introductory Biology, Ohio State, Ohio State University">
<meta name="description" content="Teaching courses in Biology at The Ohio State University">

<base href="<?= $base ?>">

<style type="text/css">
<!--
	@import url(http://www.osu.edu/css/template/osu-navbar.css);

	@import url(css/body.css);
	@import url(css/masthead.css);
	@import url(css/menu_pulldown.css);
	@import url(css/layout_1col.css);
	@import url(css/layout_2col.css);
	@import url(css/footer.css);
	@import url(css/htmlandgraphics.css);
	@import url(css/local.css);
  -->
</style>

</head>

<body>

<? include_once "http://www.osu.edu/inc/template/osu_navbar.php"; ?>

<div id="whole-page">

<!-- Logo and title -->
 <div id="title">
 <a href="http://www.osu.edu/"><img id="logo" src="images/osu_logo.png" alt="The Ohio State University" width="74" height="70" border="0"></a>
 <?= $heading ?>
 </div>
<br class="clearall">
<!-- End Logo and title -->

<!-- Page navigation -->

<!-- menu: rounded corners - top -->
<div id="cornertop"><img src="images/corner_ul.png" alt="" width="4" height="4">
<div class="rightcorner"><img src="images/corner_ur.png" alt="" width="4" height="4">
</div></div>

<div id="menulist">
<ul id="mainMenu">
 <li><a href="<?= $base ?>">Home</a></li>
 <li><a href="courses/">Courses</a>
  <? include 'menu/courses.inc'; ?>
 </li>
 <li><a href="textbooks/">Textbooks</a>
  <? include 'menu/textbooks.inc'; ?>
 </li>
 <li><a href="nytimes/">New York Times</a></li>
 <li><a href="philosophy.php">Our Philosophy</a></li>
<!-- <li><a href="events.php">Events</a>
  <? include 'menu/events.inc' ?>
 </li> -->
 <li><a href="links.php">Links</a>
  <? include 'menu/links.inc'; ?>
 </li>
 <li><a href="contact/">Contact</a>
  <? include 'menu/contact.inc'; ?>
 </li>
</ul>
<br class="clearall">
</div>

<!-- menu: rounded corners - bottoms -->
<div id="cornerbottom"><img src="images/corner_ll.png" alt="" width="4" height="4">
<div class="rightcorner"><img src="images/corner_lr.png" alt="" width="4" height="4">
</div></div>

<!-- Page content begins here -->
<a name="pagecontent" id="pagecontent"></a>
<div id="content">
<? }

function no_menu() { ?>
  <div id="singlecolumn">
<? 
  global $divs;
  $divs = 2;
}

function menu($file) { ?>
  <div id="twocolumnleft">
  <div id="smallcolumn">
  <? include "menu/$file.inc"; ?>
  <p>&nbsp;</p>
  </div>
  <div id="maincolumn">
<? 
  global $divs;
  $divs = 3;
}

function bottom() {
	?>
<p>&nbsp;</p>
<?
    global $divs;
	for ($n=0; $n<$divs; $n++) {
		echo "</div>\n";
	}
?>
<!-- End of page content -->

<br class="clearall">
<div id="footer">
<table border="0" cellpadding="0" cellspacing="0"><tr><td width="90%" align="left" style="width:90%;text-align:left">
<a href="http://www.osu.edu/" title="The Ohio State University">
<img src="images/footer.png"
     alt="The Ohio State University, www.osu.edu"
     width="250" height="17" border="0">
</a>
<p><a href="copyright.php">Copyright</a>, <?= date('Y') ?>. Center for Life Sciences Education.</p>
<p>This page is maintained by: CLSE Technology Staff &mdash;
   <a title="Contact CLSE webmaster" href="contact/webmaster.php">Contact</a></p>
<p>If you have trouble accessing this page and need to request an alternate format,
   <a href="contact/webmaster.php">contact&nbsp;the&nbsp;webmaster</a>.</p>
</td><td width="10%" align="left" font="10pt" nowrap="nowrap" style="width:10%;text-align:left;font-size:10pt;white-space:nowrap">
Center for Life Sciences Education<br/>
260 Jennings Hall<br/>
1735 Neil Avenue<br/>
Columbus, OH 43210-1106<br/>
tel: (614) 292-9861<br/>
fax: (614) 292-4390
</td></tr></table>
</div>
</div>
</body>
</html>
<? } ?>