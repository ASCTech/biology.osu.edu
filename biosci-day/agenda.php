<?
chdir('..');
require_once 'lib/basics.inc';
top('BioSci Day', 'Agenda');
menu('biosci-day');
?>

<style>
p.head {
  margin: 1em;
  text-align: center;
  font-weight: bold;
}
div.centerer, table.centered {
  margin-left: auto;
  margin-right: auto;
  text-align: center;
}
table#listing td {
  padding: 0.5em;
  text-align: left;
}
</style>

<h1>BioSci Day &mdash; Agenda</h1>

<p class="head">March 3, 2012</p>
<p class="head">All Events will Take Place in Jennings Hall</p>
<p class="head">Neil Avenue at 12th Avenue</p>
<p class="head">Ohio State University main campus</p>

<div class="centerer">
<table class="centered" id="listing">
<tr><td>9:30 &ndash; 10:30</td><td>Registration</td></tr>
<tr><td>10:00</td><td>Welcome</td></tr>
<tr><td>10:15 &ndash; 11:45</td><td>Faculty presentations</td></tr>
<tr><td>11:45 &ndash; 1:00</td><td>Lunch Break*</td></tr>
<tr><td>1:00 &ndash; 2:00</td><td>Student Panel</td></tr>
<tr><td>2:00</td><td>Adjourn</td></tr>
</table>
</div>

<p>* You can purchase lunch for $5 &ndash; $7 at various venues around campus. Student guides will be available to escort you to lunch.</p>

<? bottom(); ?>
