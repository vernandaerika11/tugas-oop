<?php
class animal {
	public $legs = 2;
	public $cold_blooded = false;

	public function __construct($name){
		$this->name= $name;
	}
	public function get_name(){
		echo $this->name;
	}
	public function get_legs(){
		echo $this->legs;
	}
	public function get_cold_blooded(){
		echo $this->cold_blooded;
	}
}

?>