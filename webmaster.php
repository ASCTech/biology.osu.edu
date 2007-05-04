<?
include 'ibp.inc';
top('Contact the Webmaster', 1);

$webmaster = "biology@osu.edu";

if (array_key_exists('_submit_check', $_POST)) {
	$subject = $_POST['subject'];
	$subject = $subject == 'other' ? $_POST['other'] : $subject;
	$from = $_POST['from'];
	$message = $_POST['message'];
	$text  = "The following message was submitted from http://biology.osu.edu/webmaster.php\n\n";
	$text .= "   From: $from\n";
	$text .= "Subject: $subject\n";
	$text .= "Message:\n$message";
	$subject = "biology.osu.edu message: $subject";
	mail($webmaster, $subject, $text);
	echo '<h1 style="color: red">Your message has been submitted and
	              will be processed as soon as possible.</h1><hr>', "\n";
}

?>
<form name="form" method="post">
<h2>Subject:</h2>
<input type="radio" name="subject" value="copyright">Copyright Inquiry</input><br>
<input type="radio" name="subject" value="alternate_format">Alternate Format Request</input><br>
<input type="radio" name="subject" value="broken_link">Report a Broken Link</input><br>
<input type="radio" name="subject" value="other" checked="checked"
  onChange="javascript:document.form.other.focus();">Other:</input><br>
  <input id="indent" type="text" name="other" size="30"/><br>
<h2>Your Email Address:</h2>
<input id="indent" type="text" name="from" size="30"/>
<h2>Message:</h2>
<span id="indent">Please provide adequate details with your message.</span><br>
<textarea id="indent" name="message" rows="10" cols="50"></textarea><br>
<input id="indent" type="submit" value="Send" />
<input type="hidden" name="_submit_check" value="1" />
</form>
<script lang="javascript">document.form.other.focus();</script>
<? bottom(); ?>