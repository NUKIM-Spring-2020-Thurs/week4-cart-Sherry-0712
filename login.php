<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>0326登入</title>
	<style>
		body{
			font-family: Microsoft JhengHei;
			background-color: #FDFFFF;
		}
	</style>
</head>
<body>
	<h2>登入</h2>

	<?php
		if (isset($_COOKIE["LID"])) {
			$user=$_COOKIE["LID"];
			echo "歡迎再度光臨".$_COOKIE["LID"]."</br></br>";
			setcookie("LID","",time()-3600);
		}else{
			$user="";
			echo "歡迎新朋友光臨</br></br>";
		}
	?>

	<form action="login_check.php" method="POST">
		帳號：<input type="text" name="lid" value="<?php echo $_COOKIE["LID"]; ?>" required></br>
		密碼：<input type="password" name="pwd" required></br></br>
		<input type="submit">
	</form>
</body>
</html>