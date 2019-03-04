<!DOCTYPE html>
<html>
<head>
	<title>Hiển thị số nguyên tố</title>
</head>
<body>
	<form method="post">
		<h1>Hiển thị những số nguyên tố đầu tiên</h1>
		<input type="number" name="soluong" placeholder="Nhập số lượng"><br><br>
		<input type="submit" name="submit" value="Hiển thị">
	</form>
	<?php 
		if ($_SERVER["REQUEST_METHOD"] === "POST") {
			$soluong = $_POST["soluong"];
			$count = 0;
			function soNguyenTo($n)
			{
				if ($n < 2) {
					return false;
				}
				for ($i = 2; $i < sqrt($n); $i++) { 
					if ($n % $i == 0) {
						return false;
					}
				}
				return true;
			}
			for ($i = 0; $i <= $soluong; $i++) { 
				if (soNguyenTo($i)) {
					echo $i." ";
				}
			}
		}
	?>

</body>
</html>