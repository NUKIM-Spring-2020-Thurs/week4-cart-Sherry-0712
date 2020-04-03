<?php
session_start();
if(isset($_SESSION["login"])){
	echo "<p font-family: Microsoft JhengHei;><b>登入失敗...</b></p>";
	echo "<a href='login.php' font-family: Microsoft JhengHei;>點擊連結重新登入</a>";
}else{
	echo "非法進入</br>";
	echo "<a href='login.php'>回首頁登入</a>";
}

?>
