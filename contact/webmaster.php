<?
chdir('..');
require_once 'lib/basics.inc';
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
    	              will be processed as soon as possible.</h1><hr/>', "\n";
    } else {
        $error = $resp->error;
    	echo '<h1 style="color: red">An error has occured. Check below.</h1><hr/>', "\n";
    }
}

?>
<form method="post" action="<?= $_SERVER['REQUEST_URI'] ?>">
<fieldset>
<h2>Subject:</h2>
<label><input type="radio" name="subject" value="copyright"/>Copyright Inquiry</label><br/>
<label><input type="radio" name="subject" value="alternate_format"/>Alternate Format Request</label><br/>
<label><input type="radio" name="subject" value="broken_link"/>Report a Broken Link</label><br/>
<label><input type="radio" name="subject" value="other" checked="checked"
  onchange="javascript:document.getElementById('othertext').focus();"/>Other:</label><br/>
  <input class="indent" type="text" name="other" id="othertext" size="30" value="<?= $_POST['other'] ?>" /><br/>
<h2>Your Email Address:</h2>
<input class="indent" type="text" name="from" size="30" value="<?= $_POST['from'] ?>" />
<h2>Message:</h2>
<span class="indent">Please provide adequate details with your message.</span><br/>
<textarea class="indent" name="message" rows="10" cols="50"><?= $_POST['message'] ?></textarea><br/>
<div style="margin:1em">
  <? if ($error) { ?><h3 style="color:red">There was a problem with the words you typed.</h3><? } ?>
  <? echo recaptcha_get_html($publickey, $error); ?>
</div>
<input type="hidden" name="_submit_check" value="1"/>
<input class="indent" type="submit" value="Submit"/>
</fieldset>
</form>
<script type="text/javascript">document.getElementById('othertext').focus();</script>
<? bottom(); ?>
