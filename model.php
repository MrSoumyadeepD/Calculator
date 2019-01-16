<?php
class calculator{
	var $x,$y,$c;
	function asign($a,$b){
		$this->x=$a;
		$this->y=$b;
	}
	function adition(){
		$this->c=$this->x+$this->y;
		echo "Adition results: ($this->x+$this->y)=$this->c";
	}
	function substraction(){
		$this->c=$this->x-$this->y;
		echo "Substraction results: ($this->x-$this->y)=$this->c";
	}
	function multiplication(){
		$this->c=$this->x*$this->y;
		echo "Multiplication results: ($this->x*$this->y)=$this->c";
	}
	function division(){
		$this->c=$this->x/$this->y;
		echo "Division results: ($this->x/$this->y)=$this->c";
	}
}
?>