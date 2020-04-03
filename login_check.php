<?php
ob_start(); //緩衝區header不會先跑，會先等其他動作做完
session_start();
$lid=$_POST["lid"];
$pwd=$_POST["pwd"];

$uid="Sherry";
$upwd="12345";

if($uid=$lid && $upwd==$pwd) {
	$_SESSION["login"]="T"; //session變數可跨檔案
	$_SESSION["LID"]=$lid;
	header('location:success.php'); //header預設有優先權會先做
}else{
	$_SESSION["login"]="F";
	header('location:fail.php');
}

?>