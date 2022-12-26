<?php

$con=new mysqli('localhost','root','test1234','crudoperation');

if(!$con){
	die(mysqli_error($con));
}

echo hello;
?>