document.write('<div class=\"rss_feed\"><ul class=\"rss_item_list\">');
<?
require_once 'simplepie.inc';

$url = 'http://www.nytimes.com/services/xml/rss/nyt/Science.xml';
$rss = new SimplePie($url);

foreach ($rss->get_items() as $item) {
    $title = $item->get_title();
    $url   = $item->get_link();
    $desc  = $item->get_description();
    echo "document.write('<li class=\\\"rss_item\\\">');\n";
    echo "document.write('<span class=\\\"rss_item_title\\\">');\n";
    echo "document.write('<a class=\\\"rss_item_link\\\" href=\\\"$url\\\">$title</a>');\n";
    echo "document.write('</span><span class=\\\"rss_item_desc\\\">$desc</span>');\n";
    echo "document.write('</li>')\n";
}
?>
document.write('</ul></div>');
