<!DOCTYPE html>
<html>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <head>
        <style> 
        input[type=text] {
            width: 300px;
            font-size: 16px;
            border: 2px solid #ccc; 
            border-radius: 4px;
            padding: 12px 10px 12px 10px;
        }
        #submit {
            border-radius: 2px;
            padding: 10px 32px;
            font-size: 16px;
        }
        </style>
    </head>
    <body>
       <h2>Product Discount Calculator</h2>
       <form method="post">
          <input type="text" name="description" placeholder="Mô tả của sản phẩm"/>
          <input type="text" name="price" placeholder="Giá niêm yết của sản phẩm">
          <input type="text" name="percent" placeholder="Tỷ lệ chiết khấu (phần trăm)">
          <input type = "submit" id = "submit" value = "Tìm"/>
       </form>
       <?php 
       		if ($_SERVER["REQUEST_METHOD"] === "POST") {
       			$sanpham = $_POST["description"];
       			$gia = $_POST["price"];
       			$phantram = $_POST["percent"];
       			$chietkhau = $gia * $phantram * 0.1;
       			$giamoi = $gia - $chietkhau;
       			echo "Sản phẩm: ".$sanpham."<br>";
       			echo "Giá: ".$gia."$"."<br>";
       			echo "Chiết khấu: ".$chietkhau."%"."<br>";
       			echo "Giá sau chiết khấu: ".$giamoi."$"."<br>";
       		}
       ?>
    </body>
    </html>