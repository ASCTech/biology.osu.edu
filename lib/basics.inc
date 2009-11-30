<?

$base = $_SERVER['SERVER_ADDR'] == $_SERVER['REMOTE_ADDR']
      ? 'http://localhost/~michaelgee/biology.osu.edu/'
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
  'Biology Major' => 'biology-major/'
);

function top() {
	global $url_map, $base;
    $pages = func_get_args();
	if (count($pages) == 0) {
		$pages = array('Biology Programs at Ohio State');
	}
	$title = implode(' | ', array_reverse($pages));
	if ($title) $title .= ' | ';
	$title .= 'The Ohio State University';
	$heading = '';
	foreach ($pages as $p) {
		if ($p) {
			$url = array_key_exists($p, $url_map) ? $url_map[$p] : 0;

			if ($heading != '') $heading .= '<img class="arrow" src="images/arrow.gif" alt=""/> ';

			$heading .= '<a ' . ($url ? 'href="' . $url . '" ' : '') . 'class="heading">' . $p . "</a>\n";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?= $title ?></title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="robots" content="all"/>
<meta name="keywords" content="Biology, Biology Programs at The Ohio State University, Center for Life Sciences Education, Introductory Biology, Ohio State, The Ohio State University, OSU"/>
<meta name="description" content="Teaching courses in Biology and advising Biology students at The Ohio State University"/>

<base href="<?= $base ?>"/>

<!-- 
  OSU Navigation Bar: Optional CSS
  Highly recommended but not required. 
  Resets style values for uniformity across all browsers. See file for more information.
-->
<link rel="stylesheet" type="text/css" href="css/reset.css" />
  
<!-- OSU Navigation Bar: Required CSS. -->
<link rel="stylesheet" type="text/css" href="css/navbar.css" />
  
<!-- OSU Navigation Bar: Required Conditional CSS. -->
<!--[if lte IE 6]>  
  <link rel="stylesheet" type="text/css" href="css/navbar-ie6.css" />
<![endif]-->
<!--[if IE 7]>  
  <link rel="stylesheet" type="text/css" href="css/navbar-ie7.css" />
<![endif]-->
  
<!-- 
  OSU Navigation Bar: Optional javascript
  Dynamically shows and hides form input labels.
-->
<script type="text/javascript" src="js/searchform.js"></script>

<!-- OSU: Optional Favicon -->
<link rel="icon" href="images/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />

<link rel="stylesheet" type="text/css" href="css/masthead.css" />
<link rel="stylesheet" type="text/css" href="css/body.css" />
<link rel="stylesheet" type="text/css" href="css/menu_pulldown.css" />
<link rel="stylesheet" type="text/css" href="css/layout_1col.css" />
<link rel="stylesheet" type="text/css" href="css/layout_2col.css" />
<link rel="stylesheet" type="text/css" href="css/footer.css" />
<link rel="stylesheet" type="text/css" href="css/local.css" />
<?
$requested_file = preg_replace('/^.*biology\.osu\.edu/','',$_SERVER['REQUEST_URI']);
$css_file = 'css' . preg_replace('/(php)|(html)$/i', 'css', $requested_file);
$css_file = preg_replace('/\?.*$/','',$css_file);
$css_file = preg_replace('/\/$/', '/index.css', $css_file);
echo file_exists($css_file) ? "\t<link rel=\"stylesheet\" type=\"text/css\" href=\"$css_file\" />\n" : "\n" ;
?>
<style type="text/css">
  /*
    OSU Navigation Bar: Note for developers:
    Page content following the OSU Navigation Bar must have a width assigned or 
    IE will not perform "skip to content".
  */
  #page-content
  {
    width: 100%;
  }
  #page-content h1, #page-content p
  {
    padding: 1em 3em;
  }

  -->
</style>

</head>

<body>

<!-- Begin OSU Navigation Bar -->
<div id="osu-Navbar">
  <p>
    <a href="#page-content" id="skip" class="osu-semantic">skip to main content</a>
  </p>
  <h2 class="osu-semantic">OSU Navigation Bar</h2>
  <div id="osu-NavbarBreadcrumb">
    <p id="osu">
      <a title="The Ohio State University homepage" href="http://www.osu.edu/">The Ohio State University</a>
    </p>
    <p id="site-name">
       <a href="<?= $base ?>">Life Sciences Education</a>
    </p>
  </div>
  <div id="osu-NavbarLinks">
    <ul>
      <li><a href="http://www.osu.edu/help.php" title="OSU Help">Help</a></li>
      <li><a href="http://buckeyelink.osu.edu/" title="Buckeye Link">Buckeye Link</a></li>
      <li><a href="http://www.osu.edu/map/" title="Campus map">Map</a></li>
      <li><a href="http://www.osu.edu/findpeople.php" title="Find people at OSU">Find People</a></li>
      <li><a href="https://webmail.osu.edu" title="OSU Webmail">Webmail</a></li>
      <li id="searchbox">
        <form action="http://google.service.ohio-state.edu/search" method="get">
          <fieldset>
            <input type="hidden" name="sort" value="date:D:L:d1" />
            <input type="hidden" name="output" value="xml_no_dtd" />
            <input type="hidden" name="ie" value="UTF-8" />
            <input type="hidden" name="oe" value="UTF-8" />
            <input type="hidden" name="client" value="default_frontend" />
            <input type="hidden" name="proxystylesheet" value="default_frontend" />
            <input type="hidden" name="site" value="default_collection" />
            <input type="hidden" name="as_dt" value="i" />
            <span class="osu-semantic">Search</span>
            <label for="search-field" class="overlabel">Search Ohio State</label>
            <input id="search-field" class="textfield" type="text" name="q" value="" />
            <button type="submit" name="go">Go</button>
          </fieldset>
        </form>
      </li>       
    </ul>
  </div>
</div>

<div id="whole-page">

<!-- Logo and title -->
 <div id="pagetitle"><h1><?= $heading ?></h1></div>
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
<a id="pagecontent"></a>
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

<div id="clse_logo">
  <a href="<?= $base ?>"><img src="images/clse_logo.png" alt="Center for Life Sciences Education"/></a>
</div>
<div id="footer-text">
<p>&copy; <?= date('Y') ?>,
  <span class="vcard" id="clse">
    <span class="fn org">
      <span class="organization-unit nowrap">Center for Life Sciences Education</span>
      <span class="organization-name">The Ohio State University</span>
    </span>
    <a class="url" href="http://clse.osu.edu/">http://clse.osu.edu/</a>
    <span class="adr">
      <span class="nowrap">| <span class="extended-address">260 Jennings Hall</span></span>
      <span class="nowrap">| <span class="street-address">1735 Neil Avenue</span></span>
      <span class="nowrap">|
        <span class="locality">Columbus</span>,
        <span class="region">OH</span>
        <span class="postal-code">43210</span>
      </span>
    </span>
    <span class="tel nowrap">
      | <span class="type">Work</span><span class="type">Pref</span><span class="value">(614) 292-9861</span>
    </span>
    <span class="tel fax">
      <span class="type">Fax</span><span class="value">(614) 292-4390</span>
    </span>
  </span>
</p>
<p>This page is maintained by: CLSE Technology Staff &mdash;
   <a title="Contact CLSE webmaster" href="contact/webmaster.php">Contact</a></p>
<p>If you have trouble accessing this page and need to request an alternate format,
   <a href="contact/webmaster.php">contact&nbsp;the&nbsp;webmaster</a>.</p>
<p><a title="validate this page's structure" style="text-decoration:none"
href="http://validator.w3.org/check?uri=referer"><abbr title="HyperText Markup Language (version 5)">HTML5</abbr></a>
 | <a title="validate this page's stylesheet" style="text-decoration:none" href="http://jigsaw.w3.org/css-validator/check/referer"><abbr title="Cascading Style Sheet">CSS</abbr></a></p>
</div>

</div>
</div>
</body>
</html>
<? } ?>
