<?
chdir('..');
require_once 'lib/basics.inc';
top('Textbooks','Autumn 2008');
menu('textbooks');
?>
<table class="textbooks">
 <tr>
  <th>Course</th>
  <th>Instructor</th>
  <th>Textbook</th>
  <th>Author</th>
  <th>ISBN</th>
 </tr>
 <tr class="gray">
  <td>101</td>
  <td>Fisher, Chordas, Cogan, &amp;&nbsp;Taylor</td>
  <td>Biology: Concepts&nbsp;&amp;&nbsp;Applications 7th&nbsp;edition</td>
  <td>Starr,&nbsp;Cecie</td>
  <td class="isbn">978-0-4951-1981-4</td>
 </tr>
 <tr class="gray">
  <td />
  <td />
  <td>101 Lab Manual</td>
  <td />
  <td class="isbn">978-0-7380-2842-2</td>
 </tr>
 <tr><td colspan=5>&nbsp;</td></tr>
 <tr>
  <td>102</td>
  <td>Reeve, Stetson, &amp;&nbsp;Rothacker</td>
  <td>Biology: Concepts&nbsp;&amp;&nbsp;Applications 7th&nbsp;edition</td>
  <td>Starr,&nbsp;Cecie</td>
  <td class="isbn">978-0-4951-1981-4</td>
 </tr>
 <tr><td colspan=5>&nbsp;</td></tr>
 <tr class="gray">
  <td>113</td>
  <td>Cogan</td>
  <td>Biology, 8th edition</td>
  <td>Campbell &amp; Reece</td>
  <td class="isbn">978-0-3215-4325-7</td>
 </tr>
 <tr class="gray">
  <td />
  <td />
  <td>113/115 Lab Manual</td>
  <td />
  <td class="isbn">978-0-7380-2855-2</td>
 </tr>
 <tr><td colspan=5>&nbsp;</td></tr>
 <tr>
  <td>114</td>
  <td>Taylor</td>
  <td>Biology, 8th edition</td>
  <td>Campbell &amp; Reece</td>
  <td class="isbn">978-0-3215-4325-7</td>
 </tr>
 <tr>
  <td />
  <td />
  <td>114/116 Lab Manual</td>
  <td />
  <td class="isbn">978-0-7380-2350-7</td>
 </tr>
 <tr>
  <td />
  <td />
  <td>Concise&nbsp;Dissection, Sheep&nbsp;Brain, Pig&nbsp;Heart</td>
  <td />
  <td />
 </tr>
 <tr>
  <td />
  <td />
  <td>Concise&nbsp;Dissection, Pigs</td>
  <td />
  <td />
 </tr>
 <tr><td colspan=5>&nbsp;</td></tr>
 <tr class="gray">
  <td>H115</td>
  <td>Dean</td>
  <td>Biology</td>
  <td>Brooker</td>
  <td class="isbn">978-0-0732-6807-1<br />(eBook:&nbsp;0077281543)</td>
 </tr>
 <tr class="gray">
  <td />
  <td />
  <td>113/115 Lab Manual</td>
  <td />
  <td class="isbn">978-0-7380-2855-2</td>
 </tr>
</table>
<?
#include 'textbook/bookstores.inc';
bottom();
?>
