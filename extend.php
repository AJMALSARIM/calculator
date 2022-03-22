<?php 
//namespace hello;

namespace hr\aaa\controller;
//require_once ("Classes/Ajmal/welcome.php");

class class1 extends controller {

	public function __construct($tt){
		return parent::__construct();
	}

	public $name;
	public function SayMyName($catch) {
		return $this->name = $catch;
	}
}

//use dd\welcome2;
class controller
{
	
	function __construct()
	{
		echo "conttoller  class";
	}
}


class sarim extends controller
{
	
	function __construct($u)
	{
		echo "sarim class";
		
	}
}
use hr\aaa\controller\class1;


 //new hh("sairm");
 /**
  * 
  */
 class cc extends controller
 {
 	
 	function __construct()
 	{
 		 return new class1("sairm");
 	}
 }
new cc();
 ?>