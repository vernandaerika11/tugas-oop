<?php
class Frog extends animal {
	public $kaki =4 ;
	public $jump;
	//public jump();
	public function get_legs(){
		echo $this->kaki;
	}
	public function jump(){
		echo "hop hop";
	}
}

?>