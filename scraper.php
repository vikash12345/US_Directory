<?
// This is a template for a PHP scraper on morph.io (https://morph.io)
// including some code snippets below that you should find helpful
require 'scraperwiki.php';
require 'scraperwiki/simple_html_dom.php';
/*This loop is for number in page*/


$Alpha = array('a' , 'b');
for($var = 0; $var <= sizeof($Alpha); $var++) 
{
 $Baselink = 'http://globalcontact.com/gc/directory/search.php?table=USDIR&company=';
 echo $link =  $Baselink . $Alpha[$var] . '&search=&search_sic=&page=1';
}


?>
