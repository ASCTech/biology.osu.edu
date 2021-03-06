<?

require_once 'lib/basics.inc';

function policies_page($course) {
	$honors = $course > 114 ? 'Honors ' : '';
	top($honors . 'Biology ' . $course, 'Course Policies');
	menu($course);
	policies($course);
	bottom();
}

function policies($course) { ?>
<h1>IBP Policies: A Word About Conduct in Large Classes</h1>
<p>This is a large class, but you are not a small part of it! To make our time together as valuable as possible, we all have to work hard at it. Every
   student has the right to learn as well as the responsibility not to deprive others of their right to learn. Every student is accountable for his or
   her actions The following basic principles may give us some guidelines:</p>
<ul>
 <li>Every student has the right to learn as well as the responsibility not to deprive others of their right to learn,</li>
 <li>Every student is accountable for his or her actions.</li>
</ul>
<p><u>In order for you to get the most out of this class, please consider the following</u>:</p>
<!--<ol style="list-style-type: lower-alpha">-->
<ul>
 <li>Attend all scheduled classes and arrive on time. Late arrivals and early departures are very disruptive. If you must be late or need to leave a
     lecture early, please be considerate of your fellow students, and do so quietly.</li>
 <li>Please do not schedule other engagements during either lecture or recitation. You probably wouldn't like it if we did! We will try to make class
     as interesting and informative as possible, but we can't learn the material for you.</li>
 <li>Please turn off your cellular phone during class time. Ringing phones and personal conversations can be very disruptive.</li>
 <li>If you have trouble hearing the material presented in lecture because of distractions around you, quietly ask those responsible for the
     distraction to stop. If the distraction continues, please let us know. It is often impossible to hear such things from our position in the
     classroom.</li>
</ul>
<h1>IBP Course Rules</h1>
<ul>
 <li>Students with Disabilities: Please contact your Course Coordinator, or the IBP director as soon as possible after the class starts to help us
     understand how we can best accommodate your needs. We have a good working relationship with the Office of Disability Services and are confident
     that all appropriate needs can be accommodated.</li>
 <li>Sexual Harassment: OSU and the Introductory Biology Program consider sexual harassment to be unacceptable behavior that destroys opportunities for
     learning. While all members of the staff involved in this course have been trained in the OSU sexual harassment policies and procedures, this is
     not true for all OSU students. Please report any concerns about questionable or unwanted behavior to the lecturer or course coordinator.</li>
 <li>Academic Misconduct: Plagiarism is not permitted; the OSU Policy on Academic Misconduct is in effect in this class.</li>
 <li>Collaborative Learning Rules: Unlike some classes, collaborative learning opportunities are not optional here. You are required to work as a group
     on some projects. You will be asked to evaluate your own contribution to group-prepared projects as well as the contribution of other group
     members. Dysfunctional groups will be provided assistance in learning how to work together to a reasonable degree.</li>
 <li>Section Changes: All section changes and adds are done at the Introductory Biology Program office between 8:00 AM and 4:00 PM at 4034 Smith
     Laboratory. In order to keep track of ongoing changes in section availability no other course personnel (the instructor, head TA, other TA's) can
     sign a change form.</li>
 <li>Late Assignment Policy:
<?
require file_exists('courses/' . $course . '/late_assignment_policy.inc')
        ? 'courses/' . $course . '/late_assignment_policy.inc'
        : 'courses/general_late_assignment_policy.inc';
?>
 </li>
 <li>Grade Inquiries: Students will have ten (10) class days to challenge any grade/score presented on Carmen they feel may be incorrect or to inquire
     about any grades not posted. The posted grade stands as permanent if left unchallenged past the ten class-day period. Carmen logs the date and time
     that TAs post grades and these times will be used to enforce this rule.</li>
</ul>
<? } ?>
