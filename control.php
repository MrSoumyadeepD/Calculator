<?php
if($_POST){
	include_once("model.php");
	$obj=new calculator;
	$obj->asign($_POST['fname'],$_POST['lname']);
	if(isset($_POST['add'])){
		$obj->adition();
	}
	if(isset($_POST['subs'])){
		$obj->substraction();
	}
	if(isset($_POST['mux'])){
		$obj->multiplication();
	}
	if(isset($_POST['div'])){
		$obj->division();
	}
}

?>