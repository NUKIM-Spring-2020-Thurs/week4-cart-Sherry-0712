<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>購物車</title>
	<style>
		body{
			font-family: Microsoft JhengHei;
			background-color: #FDFFFF;
		}
		.back{
			color: inherit;
			text-decoration: none;
			background-color: #46A3FF;
		}
		.back:hover{
			background-color: #46A3FF;
			color: white;
		}
	</style>
</head>
<body>
	<h2>您的購物車</h2>
	<table border="0">
		<tr bgcolor="#46A3FF">
			<td>功能</td>
			<td>編號</td>
			<td>商品名稱</td>
			<td>價格</td>
			<td>數量</td>
		</tr>

<?php
$flag = false;  $total = 0;
while ( list($arr, $value) = each($_COOKIE) ) {
  if ( isset($_COOKIE[$arr]) && is_array($_COOKIE[$arr]) ) {
     if ($flag) {   
        $flag = false;
        $color="#FF99CC";
     } else {
        $flag = true;
        $color="#99FFC";
     }
     echo "<tr bgcolor='".$color."'><td>";
     echo "<a href='delete.php?Id=".$arr."'>";
     echo "刪除</a></td>";
     $price = 0;
     $quantity = 0;
     while ( list($name, $value)=each($_COOKIE[$arr])) {
        echo "<td>" . $value . "</td>";
        if ($name == "Price")  $price = $value;
        if ($name == "Quantity") $quantity = $value;
     }
     $total += $price * $quantity;
     echo "</tr>";
  }
}
if ($total != 0) { 
   echo "<tr bgcolor=#FFFFB9><td colspan=5 align=right>";
   echo "總金額 = NT$".$total."元</td></tr>";
}
?>
</table></br>
<a href="catalog.php" class="back">回商品目錄</a>&nbsp;&nbsp;<a href="cart.php" class="back">檢視購物車</a>&nbsp;&nbsp;
<a href="logout.php" class="back">登出系統</a>
</body>
</html>