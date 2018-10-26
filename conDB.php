<?
session_start();

$link = mysqli_connect("localhost", "root", "root", "pandt");
mysqli_query($link, "SET CHARACTER SET UTF8");


if($link === false){
	die("error: could not connect. " . mysqli_connect_error());
}
?>