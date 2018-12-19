<?php
session_start();
if($_SESSION['name']=="Vishal"){
	echo"<p>".$_SESSION['name']."</p>";

if($_SESSION['name']=="Vishal"&&isset($_POST['sbmt'])){
	
	$v=$_POST['teach'];
	$w=$_POST['teach1'];
	$x=$_POST['teach2'];
	$y=$_POST['teach3'];
	$z=$_POST['teach4'];
	$t=$_POST['Teachers'];
	echo"$v";
	echo"$t";
	header("Location: fedd1.php");
}
?>