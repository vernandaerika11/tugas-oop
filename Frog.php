<?php
class Frog extends animal {
	public $kaki =4 ;
	public $jump ='hop hop';
	//public jump();
	public function get_legs(){
		echo $this->kaki;
	}
	public function jump(){
		echo $this->jump;
	}
}

?>
