<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Đọc số thành chữ</h2>
	<form method="post">
		<input type="text" name="number" placeholder="Nhập số cần đọc">
		<input type="submit" id="submit" value="Đọc">
	</form>
	<?php 
		if ($_SERVER["REQUEST_METHOD"] === "POST") {
			$searchnumber = $_POST["number"];
			if ($searchnumber >= 0 && $searchnumber <=10) {
				switch ($searchnumber) {
					case '0':
						echo "Zero";
						break;
					case '1':
						echo "One";
						break;
					case '2':
						echo "Two";
						break;
					case '3':
						echo "Three";
						break;
					case '4':
						echo "Four";
						break;
					case '5':
						echo "Five";
						break;
					case '6':
						echo "Six";
						break;
					case '7':
						echo "Seven";
						break;
					case '8':
						echo "Eight";
						break;
					case '9':
						echo "Nine";
						break;
					case '10':
						echo "Ten";
						break;
				}
			}
			if ($searchnumber <= 20) {
				switch ($searchnumber) {
					case '11':
						echo "Eleven";
						break;
					case '12':
						echo "Twelve";
						break;
					case '13':
						echo "Thirteen";
						break;
					case '14':
						echo "Fourteen";
						break;
					case '15':
						echo "Fifteen";
						break;
					case '16':
						echo "Sixteen";
						break;
					case '17':
						echo "Seventeen";
						break;
					case '18':
						echo "Eighteen";
						break;
					case '19':
						echo "Nineteen";
						break;
					case '20':
						echo "Twenty";
						break;
					
				}
			}
		}
	?>
	
</body>
</html>