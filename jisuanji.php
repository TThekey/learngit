<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>简单计算器</title>
</head>
<body>
<form action="jisuanji.php" method="get">
    请输入第一个数：<input type="number" name="number1"><br>
    请输入第二个数：<input type="number" name="number2"><br>
    请选择运算符：<select name="yunsuanfu">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select><br>
    <input type="submit" value="计算"/>
    <input type="reset" value="重置"/>
</form>
</body>
</html>
<?php
    $number1="";
    $number2="";
    $fuhao="";
    $result="";
    if(isset($_GET["number1"])) {
        $number1 = $_GET["number1"];
    }
    if(isset($_GET["number2"])) {
        $number2 = $_GET["number2"];
    }
    if(isset($_GET["yunsuanfu"])) {
        $fuhao = $_GET["yunsuanfu"];
    }
        switch ($fuhao) {
            case "+":
                $result = $number1 + $number2;
                break;
            case "-":
                $result = $number1 - $number2;
                break;
            case "*":
                $result = $number1 * $number2;
                break;
            case "/":
                if ($number2 == 0) {
                    $result = "除数不能为零";
                } else {
                    $result = $number1 / $number2;
                }
                break;
        }
        echo "<br/>";
    echo "运算结果为$result";

?>