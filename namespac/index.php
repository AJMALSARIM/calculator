<?php 

//namespace A2;

require "global/a.php";

use Abc\Ajmal as Ajmal2;
use Abc\sarim as sarim2;

/*class Ajmal {
	public function index() {
		echo "A2 Hello";
	}
}


$ob = new \Abc\Ajmal();

$ob->index();

$ob = new \A2\Ajmal();

$ob->index();*/

$ob = new Ajmal2();

$ob->index();
$sa = new sarim2();
$sa->sarim();