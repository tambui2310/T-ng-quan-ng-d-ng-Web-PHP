<!DOCTYPE html>
<html>
<head>
	<title>Đổi tiền</title>
</head>
<body>
	<h1>Đổi USD sang VND</h1>
	<form method="POST">
		<input type="number" name="dollar" placeholder="Nhập USD">
		<p>Tỉ giá: 23000 VND/USD</p><br>
		<input type="submit" name="submit" value="Đổi">
	</form>
	<?php 
	if ($_SERVER["REQUEST_METHOD"] === "POST") {
	 	$usd = $_POST["dollar"];
	 	$rate = 23000;
	 	$vnd = $usd * $rate;
	 	echo $usd." USD = ".$vnd." VND";
	 } ?>

</body>
</html>