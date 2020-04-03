<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>0326商品目錄</title>
	<style>
		body{
			font-family: Microsoft JhengHei;
			background-color: #FDFFFF;
		}
		a{
			color: inherit;
			text-decoration: none;
			background-color: #46A3FF;
		}
		a:hover{
			background-color: #46A3FF;
			color: white;
		}
	</style>
	<?php
		session_start();
		if(isset($_POST["Item"])){
			$_SESSION["Quantity"] = $_POST["Quantity"];
			$id = $_POST["Item"];
			$_SESSION["ID"] = $id;
			switch (strtoupper($id)) {
				case "S001":
					$_SESSION["Name"]="古早味糖果";
					$_SESSION["Price"]="100";
					break;
				case "S002":
					$_SESSION["Name"]="焦糖布丁";
					$_SESSION["Price"]="70";
					break;
				case "S003":
					$_SESSION["Name"]="草莓蛋糕";
					$_SESSION["Price"]="350";
					break;
			}
			header("Location:addcart.php");
		}
	?>
</head>

<body>
	<h2>商品目錄</h2>
	<form action="catalog.php" method="POST">
	選擇商品：<select name="Item">
			 	<option value="S001">古早味糖果-$100/包</option>
			 	<option value="S002">焦糖布丁-$70/4入</option>
			 	<option value="S003">草莓蛋糕-$350/6吋</option>
		     </select> &nbsp;
	<input type="text" size="5" name="Quantity" value="1"></br></br>
	<input type="submit" value="訂購">
	</form></br>
	<a href="catalog.php">商品目錄</a>&nbsp;&nbsp;<a href="cart.php">檢視購物車</a>&nbsp;&nbsp;
	<a href="logout.php">登出系統</a>
</body>
</html>