<?
chdir('..');
require_once 'lib/basics.inc';
top('Textbooks','Summer 2010');
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
  <td>Cogan</td>
  <td>Biology: Concepts&nbsp;&amp;&nbsp;Applications 7th&nbsp;edition</td>
  <td>Starr,&nbsp;Cecie</td>
  <td class="isbn">978-0-4951-1981-4</td>
 </tr>
 <tr class="gray">
  <td></td>
  <td></td>
  <td>101 Lab Manual</td>
  <td></td>
  <td class="isbn">978-0-7380-3305-1</td>
 </tr>
 <tr class="gray">
  <td></td>
  <td></td>
  <td>Turning&nbsp;Techologies ResponseCard&nbsp;RF &nbsp;(clicker)</td>
  <td></td>
  <td class="isbn notabook">not a book</td>
 </tr>
 <tr><td colspan=5>&nbsp;</td></tr>
 <tr>
  <td>101N</td>
  <td>Smock</td>
  <td>Biology: Concepts&nbsp;&amp;&nbsp;Applications 7th&nbsp;edition <span class="disposition">recommended</span></td>
  <td>Starr,&nbsp;Cecie</td>
  <td class="isbn">978-0-4951-1981-4</td>
 </tr>
 <tr>
  <td></td>
  <td></td>
  <td>101 Lab Manual <span class="disposition">required</span></td>
  <td></td>
  <td class="isbn">978-0-7380-3305-1</td>
 </tr>
 <tr>
  <td></td>
  <td></td>
  <td>Turning&nbsp;Techologies ResponseCard&nbsp;RF &nbsp;(clicker) <span class="disposition">required</span></td>
  <td></td>
  <td class="isbn notabook">not a book</td>
 </tr>
 <tr><td colspan=5>&nbsp;</td></tr>
 <tr class="gray">
  <td>102</td>
  <td>Taylor</td>
  <td>Biology: Concepts&nbsp;&amp;&nbsp;Applications 7th&nbsp;edition <span class="disposition">recommended</span></td>
  <td>Starr,&nbsp;Cecie</td>
  <td class="isbn">978-0-4951-1981-4</td>
 </tr>
 <tr><td colspan=5>&nbsp;</td></tr>
 <tr>
  <td>102N</td>
  <td>Santangelo</td>
  <td>Biology: Concepts&nbsp;&amp;&nbsp;Applications 7th&nbsp;edition <span class="disposition">recommended</span></td>
  <td>Starr,&nbsp;Cecie</td>
  <td class="isbn">978-0-4951-1981-4</td>
 </tr>
 <tr><td colspan=5>&nbsp;</td></tr>
 <tr class="gray">
  <td>113</td>
  <td>Rothacker</td>
  <td>Biology, 8th edition</td>
  <td>Campbell &amp;&nbsp;Reece</td>
  <td class="isbn">978-0-8053-6844-4</td>
 </tr>
 <tr class="gray">
  <td></td>
  <td></td>
  <td>113/115 Lab Manual</td>
  <td></td>
  <td class="isbn">978-0-7380-3317-4</td>
 </tr>
 <tr><td colspan=5>&nbsp;</td></tr>
 <tr>
  <td>114</td>
  <td>Olson</td>
  <td>Biology, 8th edition</td>
  <td>Campbell &amp;&nbsp;Reece</td>
  <td class="isbn">978-0-8053-6844-4</td>
 </tr>
 <tr>
  <td></td>
  <td></td>
  <td>114/116 Lab Manual</td>
  <td></td>
  <td class="isbn">978-0-7380-3313-6</td>
 </tr>
 <tr>
  <td></td>
  <td></td>
  <td>Concise&nbsp;Dissection, Sheep&nbsp;Brain, Pig&nbsp;Heart</td>
  <td></td>
  <td></td>
 </tr>
 <tr>
  <td></td>
  <td></td>
  <td>Concise&nbsp;Dissection, Pigs</td>
  <td></td>
  <td></td>
 </tr>
</table>
<?
#include 'textbook/bookstores.inc';
bottom();
?>
