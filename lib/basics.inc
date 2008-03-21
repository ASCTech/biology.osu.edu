<?

$base = $_SERVER['SERVER_ADDR'] == $_SERVER['REMOTE_ADDR']
      ? 'http://localhost:8080/~michaelgee/biology.osu.edu/'
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
	'Biology Programs at Ohio State' => $base,
	'Biology 101' => 'courses/101/',
	'Biology 102' => 'courses/102/',
	'Biology 113' => 'courses/113/',
	'Biology 114' => 'courses/114/',
	'Honors Biology 115' => 'courses/115/',
	'Honors Biology 116' => 'courses/116/',
	'Staff' => 'contact/staff',
);

function top() {
	global $url_map, $base;
    $pages = func_get_args();
	if (count($pages) > 0) {
		array_unshift($pages, 'Biology Programs at Ohio State');
	} else {
		$pages = array('Biology Programs at Ohio State');
	}
	$title = implode(' - ', array_reverse($pages));
	if ($title) $title .= ' - ';
	$title .= 'The Ohio State University';
	$heading = '';
	foreach ($pages as $p) {
		if ($p) {
			$url = array_key_exists($p, $url_map) ? $url_map[$p] : 0;

			$clse = $p == 'Biology Programs at Ohio State' ? 1 : 0;

			$h_img = str_replace(' ', '_', $p);
			$h_img = "images/headings/$h_img.gif";
			if (file_exists($h_img)) $p = '<img src="' . $h_img . '" alt="' . $p . '"/>';

			$heading .= '<span class="nobreak">';
			if (!$clse) $heading .= '<img class="arrow" src="images/arrow.gif" alt=""> ';
			$heading .= '<a ' . ($url ? 'href="' . $url . '" ' : '') . 'class="heading">' . $p . "</a>\n";
			$heading .= '</span>';
		}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title><?= $title ?></title>
<meta http-equiv="content-type" content="text/html; charset=us-ascii"/>
<meta name="robots" content="all"/>
<meta name="keywords" content="Biology, Biology Programs at The Ohio State University, Center for Life Sciences Education, Introductory Biology, Ohio State, The Ohio State University, OSU"/>
<meta name="description" content="Teaching courses in Biology and advising Biology students at The Ohio State University"/>

<base href="<?= $base ?>"/>

<style type="text/css">
<!--
	@import url(http://www.osu.edu/css/template/osu-navbar.css);

	@import url(css/body.css);
	@import url(css/masthead.css);
	@import url(css/menu_pulldown.css);
	@import url(css/layout_1col.css);
	@import url(css/layout_2col.css);
	@import url(css/footer.css);
	@import url(css/local.css);
  -->
</style>

</head>

<body>

<!-- Ohio State University masthead: Updated September 2006: Accessiblity improvements. See http://www.osu.edu/resources/ -->
<h2 class="osu-semanticContent">OSU masthead and toolbar</h2>
<div id="osu-masthead">
	<div class="osu-masttitle">
	<a href="http://www.osu.edu/" title="The Ohio State University">The Ohio State University</a>
	</div>

	<div class="osu-masturl">
	 <a href="http://www.osu.edu/" title="The Ohio State University">www.osu.edu</a>

	</div>
	<form id="osu-mastnavigation" action="http://google.service.ohio-state.edu/search" method="get">
		<ol>
			<li><a href="http://www.osu.edu/help.php" title="OSU Help">Help</a></li>
			<li><a href="http://www.osu.edu/map/" title="Campus map">Campus map</a></li>
			<li><a href="http://www.osu.edu/findpeople.php" title="Find people at OSU">Find people</a></li>
			<li><a href="https://webmail.osu.edu" title="OSU Webmail">Webmail</a></li>

			<li>
				<div class="osu-semanticContent">
					<label for="Search">Search Ohio State</label>
				</div>
				<input id="Search" class="textfield" type="text" name="q" size="14" maxlength="256" value="Search" onfocus="this.value='';" accesskey="s" tabindex="1" />
				<input class="go" type="submit" value="Go" name="submit"/>
				<input value="date:D:L:d1" name="sort" type="hidden" /><input value="xml_no_dtd" name="output" type="hidden" /><input value="UTF-8" name="ie" type="hidden" /><input value="UTF-8" name="oe" type="hidden" /><input value="default_frontend" name="client" type="hidden" /><input value="default_frontend" name="proxystylesheet" type="hidden" /><input value="default_collection" name="site" type="hidden" /><input type="hidden" name="as_dt" value="i" />
			</li>

		</ol>
	</form>
	<br class="osu-clearall" />
</div>
<div class="osu-hr"><hr /></div>
<!-- End masthead -->


<div id="whole-page">

<!-- Logo and title -->
 <div id="pagetitle">
 <a href="http://www.osu.edu/"><img id="logo" src="images/osu_logo.png" alt="The Ohio State University" width="74" height="70"/></a>
 <?= $heading ?>
 </div>
<br class="clearall"/>
<!-- End Logo and title -->

<!-- Page navigation -->

<!-- menu: rounded corners - top -->
<div id="cornertop"><img src="images/corner_ul.png" alt="" width="4" height="4"/>
 <div class="rightcorner"><img src="images/corner_ur.png" alt="" width="4" height="4"/></div>
</div>

<div id="menulist">
<ul id="mainMenu">
 <li><a href="<?= $base ?>">Home</a></li>
 <li><a href="biology-major/">Biology Major</a>
  <? include 'menu/biology-major.inc'; ?>
 </li>
 <li><a href="courses/">Introductory Biology Courses</a>
  <? include 'menu/courses.inc'; ?>
 </li>
 <li><a href="nytimes/">New York Times</a></li>
 <li><a href="links.php">Links</a>
  <? include 'menu/links.inc'; ?>
 </li>
 <li><a href="contact/">Contact</a>
  <? include 'menu/contact.inc'; ?>
 </li>
</ul>
<br class="clearall"/>
</div>

<!-- menu: rounded corners - bottoms -->
<div id="cornerbottom"><img src="images/corner_ll.png" alt="" width="4" height="4"/>
 <div class="rightcorner"><img src="images/corner_lr.png" alt="" width="4" height="4"/></div>
</div>

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

<br class="clearall"/>
<div id="footer">

<div id="footer-left">
<a href="http://www.osu.edu/" title="The Ohio State University"><img src="images/footer.png" alt="The Ohio State University, www.osu.edu" width="250" height="17"/></a>
<p><a href="copyright.php">Copyright</a>, <?= date('Y') ?>. Center for Life Sciences Education.</p>
<p>This page is maintained by: CLSE Technology Staff &mdash;
   <a title="Contact CLSE webmaster" href="contact/webmaster.php">Contact</a></p>
<p>If you have trouble accessing this page and need to request an alternate format,
   <a href="contact/webmaster.php">contact&nbsp;the&nbsp;webmaster</a>.</p>
<p><a title="valid this page" style="text-decoration:none;font-size:0.8em" href="http://validator.w3.org/check?uri=referer"><abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></p>
</div>

<div class="vcard" id="clse">
<div class="fn org">
 <div class="organization-unit">Center for Life Sciences Education</div>
 <div class="organization-name">The Ohio State University</div>
</div>
<a class="url" href="http://clse.osu.edu/">http://clse.osu.edu/</a>
<div class="adr">
 <div class="extended-address">260 Jennings Hall</div>
 <div class="street-address">1735 Neil Avenue</div>
 <span class="locality">Columbus</span>,
 <span class="region">OH</span>
 <span class="postal-code">43210-1106</span>
</div>
<div class="tel">
 <div class="type">Work</div><div class="type">Pref</div>
 tel: <span class="value">(614) 292-9861</span>
</div>
<div class="tel">
 <div class="type">Fax</div>
 fax: <span class="value">(614) 292-4390</span>
</div>
</div>

</div>
</div>
</body>
</html>
<? } ?>