<?
chdir('..');
include_once 'lib/basics.inc';
require_once 'lib/recaptchalib.php';
top('Contact the Webmaster');
no_menu();

$webmaster = "biology@osu.edu";

# for reCAPTCHA
$publickey  = '6LeAxgAAAAAAAPRk9BFguqE-uSN0aZSnRi4_8DJo';
$privatekey = '6LeAxgAAAAAAALo-2A4PnYtrh3lbFT8xeYgXmMnp';
$resp = null;
$error = null;

if (array_key_exists('_submit_check', $_POST)) {
    $resp = recaptcha_check_answer($privatekey,
                                   $_SERVER['REMOTE_ADDR'],
                                   $_POST['recaptcha_challenge_field'],
                                   $_POST['recaptcha_response_field']);
    if ($resp->is_valid) {
    	$subject = $_POST['subject'];
    	$subject = $subject == 'other' ? $_POST['other'] : $subject;
    	$from = $_POST['from'];
    	$message = $_POST['message'];
    	$text  = "The following message was submitted from http://biology.osu.edu/contact/webmaster.php\n\n";
    	$text .= "   From: $from\n";
    	$text .= "Subject: $subject\n";
    	$text .= "Message:\n$message";
    	$subject = "biology.osu.edu message: $subject";
    	mail($webmaster, $subject, $text);
    	echo '<h1 style="color:blue">Your message has been submitted and
    	              will be processed as soon as possible.</h1><hr>', "\n";
    } else {
        $error = $resp->error;
    	echo '<h1 style="color: red">An error has occured. Check below.</h1><hr>', "\n";
    }
}

?>
<form name="form" method="post">
<h2>Subject:</h2>
<input type="radio" name="subject" value="copyright">Copyright Inquiry</input><br>
<input type="radio" name="subject" value="alternate_format">Alternate Format Request</input><br>
<input type="radio" name="subject" value="broken_link">Report a Broken Link</input><br>
<input type="radio" name="subject" value="other" checked="checked"
  onChange="javascript:document.form.other.focus();">Other:</input><br>
  <input id="indent" type="text" name="other" size="30" value="<?= $_POST['other'] ?>" /><br>
<h2>Your Email Address:</h2>
<input id="indent" type="text" name="from" size="30" value="<?= $_POST['from'] ?>" />
<h2>Message:</h2>
<span id="indent">Please provide adequate details with your message.</span><br>
<textarea id="indent" name="message" rows="10" cols="50"><?= $_POST['message'] ?></textarea><br>
<div style="margin:1em">
  <? if ($error) { ?><h3 style="color:red">There was a problem with the words you typed.</h3><? } ?>
  <? echo recaptcha_get_html($publickey, $error); ?>
</div>
<input type="hidden" name="_submit_check" value="1" />
<input id="indent" type="submit" value="Submit" />
</form>
<script lang="javascript">document.form.other.focus();</script>
<? bottom(); ?>
