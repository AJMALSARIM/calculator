<?php
namespace ajii;
require_once "Classes/AmeerHamza/welcome.php";
require_once "Classes/Ajmal/welcome.php";

class sarim{
	function __construct(){
		echo 'im sarim';
	}
}
class ajmal 
{
	
	function __construct()
	{
		echo 'ajmal sarim how are you man';
	}
}

class view 
{
	
	function __construct()
	{
		echo 'view';
	}
}
use ajii\sarim as rana;
use ajii\view as view;

use AmeerHamza\welcome1;
use Ajmal\welcome2;
use Ajmal\youb as youb;

$class = new welcome1("welcome1");
echo "<br/>";

echo "<br/>";
 $ajmal = new welcome2("welcome2");

//echo $ajmal->SayMyName("sarim");
exit();
echo "<br/>";

//$class = new WelcomeAjmal();
//echo $class->SayMyName();
echo "<br>";
//$class->name = "Asfand";
//echo $class;
$youb = new youb();
//$youb->y();
//new view();

