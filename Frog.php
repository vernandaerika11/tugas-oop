<?php
class Frog extends animal {
	public $kaki =4 ;
	public $jump ='hop hop';
	public $cold = 'true';
	//public jump();
	public function get_legs(){
		echo $this->kaki;
	}
	public function jump(){
		echo $this->jump;
	}
	public function get_cold_blooded(){
		echo $this->cold;
	}
}

?>
