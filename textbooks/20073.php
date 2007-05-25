<?
chdir('..');
include_once 'lib/basics.inc';
top('Textbooks','Summer 2007');
menu('textbooks');
?>
<table class="textbooks" cellspacing="0" cellpadding="0">
 <tr>
  <th>Course</th>
  <th>Instructor</th>
  <th>Textbook</th>
  <th>Author</th>
  <th>ISBN</th>
 </tr>
 <tr class="gray">
  <td>101 First&nbsp;Term</td>
  <td>Baker</td>
  <td>Biology: Dimensions&nbsp;o&nbsp;Life</td>
  <td>Jenner</td>
  <td class="isbn">978-07-2952674</td>
 </tr>
 <tr class="gray">
  <td />
  <td />
  <td>101 Lab Manual</td>
  <td />
  <td class="isbn">978-0-7380-2126-3</td>
 </tr>
 <tr><td>&nbsp;</td></tr>
 <tr>
  <td>101N</td>
  <td>Chordas</td>
  <td>Essential&nbsp;Biology 3rd&nbsp;edition</td>
  <td>Campbell, Reece, Simon</td>
  <td class="isbn">0-536-38343-X</td>
 </tr>
 <tr>
  <td />
  <td />
  <td>101 Lab Manual</td>
  <td />
  <td class="isbn">978-0-7380-2126-3</td>
 </tr>
 <tr><td>&nbsp;</td></tr>
 <tr class="gray">
  <td>102N</td>
  <td>Santangelo</td>
  <td>Human&nbsp;Biology, 9th&nbsp;edition, custom</td>
  <td>Mader</td>
  <td class="isbn">007-347651X</td>
 </tr>
 <tr><td>&nbsp;</td></tr>
 <tr>
  <td>102 Second&nbsp;Term</td>
  <td>TBD</td>
  <td>TBD</td>
  <td />
  <td />
 </tr>
 <tr><td>&nbsp;</td></tr>
 <tr class="gray">
  <td>113</td>
  <td>Cogan &amp; Breitenberger</td>
  <td>Biology, 7th edition</td>
  <td>Campbell, Reece</td>
  <td class="isbn">978-0-8053-7146-X</td>
 </tr>
 <tr class="gray">
  <td />
  <td />
  <td>113 Lab Manual</td>
  <td />
  <td class="isbn">978-0-7380-2187-4</td>
 </tr>
 <tr><td>&nbsp;</td></tr>
 <tr>
  <td>114</td>
  <td>Kovach</td>
  <td>Biology, 7th edition</td>
  <td>Campbell, Reece</td>
  <td class="isbn">978-0-8053-7146-X</td>
 </tr>
 <tr>
  <td />
  <td />
  <td>114 Lab Manual</td>
  <td />
  <td class="isbn">978-0-7380-2171-3</td>
 </tr>
 <tr>
  <td />
  <td />
  <td>Concise Dissection, Sheep Brain, Pig Heart</td>
  <td />
  <td />
 </tr>
 <tr>
  <td />
  <td />
  <td>Concise Dissection, Pigs</td>
  <td />
  <td />
 </tr>
</table>
<?
#include 'textbook/bookstores.inc';
bottom();
?>