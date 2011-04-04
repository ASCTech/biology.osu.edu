<?
chdir('..');
require_once 'lib/basics.inc';
top('NMS Undergraduate Research Forum', 'Frequently Asked Questions', 'no-navbar');
menu('research-forum');
?>

<ol id="toc"></ol>

<dl id="faq">
	<dt>May I have an excuse for missing class on the day of the Forum?</dt>
	<dd>Yes, we will write a letter or send an email requesting that you be excused from class. Please contact Dr. Caroline Breitenberger at <a href="mailto:breitenberger.1@osu.edu">breitenberger.1@osu.edu</a> with the name of the professor to whom the excuse should be sent.</dd>

	<dt>I would prefer not to miss a class that overlaps the judging time at the Forum; do I have to be there the whole time for judging?</dt>
	<dd>Yes, we can accommodate your schedule (to some extent). Please contact Dr. Caroline Breitenberger at <a href="mailto:breitenberger.1@osu.edu">breitenberger.1@osu.edu</a> to request special consideration for judging.</dd>

	<dt>May I submit the same abstract to more than one conference or poster session?</dt>
	<dd>Yes, it is OK to submit the same abstract to more than one conference or research forum (e.g. the NMS Undergraduate Research Forum and the Denman), but you must register separately for each event.</dd>

	<dt>If a group worked on a project together, may we present our poster as a group?</dt>
	<dd>Yes, group posters are allowed. Please have each member of the group register for the Forum; only one person should upload the abstract.</dd>

	<dt>Do I receive anything for participating in the NMS Undergraduate Research Forum?</dt>
	<dd>All presenters at the NMS Undergraduate Research Forum receive a certificate acknowledging their participation and a $50 OSU bookstore gift card. The certificate and gift card will be handed out to participants at the awards ceremony at the end of the Forum.</dd>

	<dt>What should I wear for the Forum?</dt>
	<dd>Appropriate attire is business casual. You will be standing at your poster for long periods of time, so make sure your shoes are comfortable.</dd>

	<dt>How will I know when I am being judged?</dt>
	<dd>There will be at least 2 judges for each presenter. Judges will wear name badges with a &quot;judge&quot; ribbon. You are allowed to leave your poster for short breaks, and will be given a card to display indicating when you will return.</dd>

	<dt>How do judges evaluate my presentation?</dt>
	<dd>The judging form will be posted on the Forum web site. Most judges will expect you to be able to present a 5-10 minute summary of your research, during which they will interrupt to ask questions about your work.</dd>

	<dt>Will I be able to see the judges&rsquo; evaluations of my presentation?</dt>
	<dd>Yes, the completed judging forms will be returned to you within a few days after the Forum.</dd>

	<dt>Is there funding available to defray poster printing costs?</dt>
	<dd>No, we do not have any way to help defray poster preparation costs other than the $50 gift card. (Check with your research advisor or department.)</dd>

	<dt>May I present the work I did at another institution?</dt>
	<dd>Yes, research done outside OSU is acceptable.</dd>

	<dt>How should I prepare for the judging?</dt>
	<dd>You should prepare a short (5-10 minute) summary of your research, and you should expect the judge to interrupt your presentation with questions about your research. A good way to prepare for the judging is to have graduate students and other lab personnel quiz you about your project, your data, and its significance.</dd>

</dl>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script>
$(function(){
	var toc = $('#toc');
	$('#faq dt').each(function(index, elem){
		var label = index + 1;
		elem.id = 'question_' + label;
		var li = $('<li/>');
		li.append($('<a/>', {text: elem.innerText, href: '/research-forum/faq.php#question_' + label}));
		toc.append(li);
		elem.innerText = label + '. ' + elem.innerText;
	});
});
</script>

<? bottom(); ?>
