<?
// This is a template for a PHP scraper on morph.io (https://morph.io)
// including some code snippets below that you should find helpful
require 'scraperwiki.php';
require 'scraperwiki/simple_html_dom.php';
$Baselink = 'http://globalcontact.com/gc/directory/search.php?table=USDIR&company=';
$Alpha = array('a' , 'b')


/*This loop is for number in page*/
;
for($var = 0; $var <= sizeof($Alpha); $var++) 
{
$link =  $Baselink . $Alpha[$var] . '&search=&search_sic=&page=1';
$html 		= file_get_html($link);
if($html)
  {
     $lastpageno =  $html->find("/html/body/center/table/tbody/tr[2]/td[2]/div/div[2]/table/tbody/tr/td[2]/div/div[4]/center/div/a[11]", 0);
    if(is_object($lastpageno))
    {
    echo $int = filter_var($lastpageno, FILTER_SANITIZE_NUMBER_INT);

      
        /*  $str = 'In My Cart : 11 12 items';
    preg_match_all('!\d+!', $str, $matches);
      echo $matches;
      */
      
      //		echo		$checkloopnumberforpagintion	=	str_replace("<a href='search.php?table=USDIR&amp;company=", "", $lastpageno);

    //  <a href="search.php?table=USDIR&amp;company=b&amp;search=&amp;search_sic=&amp;page=2917">Last»</a>
      
  
    }
  }
 
 
 
}


?>
