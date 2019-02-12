<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <div id="content">
        <h1>Future Value Calculator</h1>
        
        <form method="post">
            <div id="data">
                <label>Lượng tiền đầu tư ban đầu:</label>
                <input type="text" name="investment" /><br/>

                <label>Lãi suất năm:</label>
                <input type="text" name="rate" /><br/>

                <label>Số năm đầu tư:</label>
                <input type="text" name="years" />
            </div>
            <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit" value="Calculate"/><br/>
            </div>
        </form>
    </div>
    <?php 
       if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $InventmentAmount = $_POST["investment"];
            $YearlyInterestRate = $_POST["rate"];
            $NumberofYears = $_POST["years"];
            $ValueOneYear = $InventmentAmount + ($InventmentAmount * $YearlyInterestRate *0.1);
            $FutureValue = $ValueOneYear * $NumberofYears;
            echo "Giá trị Tương lai: ".$FutureValue."$";
        }
     ?>

</body>
</html>