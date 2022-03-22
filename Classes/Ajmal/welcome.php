<?php
//namespace dd;

class Welcome2 {

	public function __construct($tt){
		echo $tt;
	}
	public $name;
	public function SayMyName($catch) {
		return $this->name = $catch;
	}
	/*public function __toString() {
		return "My Name is : ".$this->name;
	}*/
}
/**
* 
*/
//namespace Ajmal\sarim\aj;
class Rout
{
	
	
	public function x()
	{
		echo 'what are you doing x';
	}
	public function z(){
		echo 'its z function';
	}
}

class youb extends Rout
{
	
	public function y()
	{
		return Rout::x();
	}
}
//namespace Ajmal\sarim\aj\the;

class TheParent{

    public function parse($new)
    {
        TheChild::validate();
    }


}

class simple{

    public function rana(){
        echo 'simple';
    }

  

}
class TheChild extends TheParent{

    static function validate(){
        echo 'Valid!!';
    }
}
/**
* 
*/
?>