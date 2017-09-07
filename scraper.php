<?
// This is a template for a PHP scraper on morph.io (https://morph.io)
// including some code snippets below that you should find helpful
require 'scraperwiki.php';
require 'scraperwiki/simple_html_dom.php';
$Baselink = 'http://globalcontact.com/gc/directory/search.php?table=USDIR&company=';
$Alpha = array('a' , 'b')


/*This loop is for number in page*/
;
for($var = 1; $var <= sizeof($Alpha); $var++) 
{
$link =  $Baselink . $Alpha[$var] . '&search=&search_sic=&page=1';
$html 		= file_get_html($link);
if($html)
  {
     $lastpageno $html->find("/html/body/center/table/tbody/tr[2]/td[2]/div/div[2]/table/tbody/tr/td[2]/div/div[4]/center/div/a[11]", 0);
      
      echo $lastpageno;
  }
 
 
 
}


?>
