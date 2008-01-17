<?
chdir('..');
require_once 'lib/basics.inc';
top('New York Times');
menu('nyt');
require 'nytimes/usage.inc';
?>
<h1>How to order the New York Times</h1>
<p>Should you choose to obtain your own personal subscription to the New York
   Times, please click on the following PDF document link to view and print the
   order form.  In order to view this document, you must have a PDF reader
   installed on your computer.  If you need to download a PDF reader, please
   <a href="http://www.foxitsoftware.com/pdf/rd_intro.php">click here</a>
   and follow the on screen instructions for downloading and installing Foxit Reader.</p>
<center><a href="nytimes/order_form/current.pdf">New York Times Order Form</a></center>
<? bottom(); ?>
