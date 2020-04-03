<?php
session_start();

if(isset($_SESSION["login"])){
	//echo "恭喜你登入成功！</br></br>";
	$date=strtotime("+5 days",time());
	$uName=$_SESSION["LID"];
	setcookie("LID",$uName,$date);
	header("Location:catalog.php");
	//echo "<a href='logout.php'>登出系統</a>";
}else{
	echo "非法進入</br>";
	echo "<a href='login.php'>回首頁登入</a>";
}


?>