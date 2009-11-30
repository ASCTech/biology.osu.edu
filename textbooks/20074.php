<?
chdir('..');
require_once 'lib/basics.inc';
top('Textbooks','Autumn 2007');
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
  <td>101<br/>(all&nbsp;sections)</td>
  <td>Baker, Fisher, Cogan, Chordas</td>
  <td>Biology: Concepts&nbsp;&amp;&nbsp;Applications 7th&nbsp;edition</td>
  <td>Starr,&nbsp;Cecie</td>
  <td class="isbn">978-0-4951-1981-4</td>
 </tr>
 <tr class="gray">
  <td />
  <td />
  <td>101 Lab Manual</td>
  <td />
  <td class="isbn">978-0-7380-2339-7</td>
 </tr>
 <tr><td colspan=5>&nbsp;</td></tr>
 <tr>
  <td>102</td>
  <td>Reeve</td>
  <td>Human&nbsp;Biology, 9th&nbsp;edition, custom</td>
  <td>Mader,&nbsp;Sylvia</td>
  <td class="isbn">007-347651X</td>
 </tr>
 <tr><td colspan=5>&nbsp;</td></tr>
 <tr class="gray">
  <td>113</td>
  <td>Chang &amp; Weinstein</td>
  <td>Biology, 7th edition</td>
  <td>Campbell &amp; Reece</td>
  <td class="isbn">978-0-8053-7146-X</td>
 </tr>
 <tr class="gray">
  <td />
  <td />
  <td>113/115 Lab Manual</td>
  <td />
  <td class="isbn">978-0-7380-2355-7</td>
 </tr>
 <tr><td colspan=5>&nbsp;</td></tr>
 <tr>
  <td>114</td>
  <td>Klompen</td>
  <td>Biology, 7th edition</td>
  <td>Campbell &amp; Reece</td>
  <td class="isbn">978-0-8053-7146-X</td>
 </tr>
 <tr>
  <td />
  <td />
  <td>114 Lab Manual</td>
  <td />
  <td class="isbn">978-0-7380-2349-6</td>
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
  <td>Brooker,&nbsp;Robert, et.al.</td>
  <td class="isbn">978-0-0732-6807-1</td>
 </tr>
 <tr class="gray">
  <td />
  <td />
  <td>113/115 Lab Manual</td>
  <td />
  <td class="isbn">978-0-7380-2355-7</td>
 </tr>
</table>
<?
#include 'textbook/bookstores.inc';
bottom();
?>
