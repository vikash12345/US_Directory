<?
// This is a template for a PHP scraper on morph.io (https://morph.io)
// including some code snippets below that you should find helpful
require 'scraperwiki.php';
require 'scraperwiki/simple_html_dom.php';


$NewLink	=	'http://globalcontact.com/gc/directory/search.php?table=USDIR';
$html 		= file_get_html($NewLink);
$var = 'Hello';
$input =  $html->find('input[type=text]', 0)->innertext = 'foo';
echo $input
     
    //code



/*


This loop is for number in page
$alpha = array('a' , 'b');
for($var = 1; $var<= 2; $var++) 
{
 echo $link = 'http://globalcontact.com/gc/directory/search.php?table=USDIR&company=a&search=&search_sic=&page=' .$var;
}
*/

?>
