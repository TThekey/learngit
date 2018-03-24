<html>  
  <head>      
      <title>register</title>  
      </head>  
  <body>
<?php
    $userName=$_GET["userName"];
    $password=$_GET["password"];
    $email=$_GET["email"];
    $number=$_GET["number"];
    $color=$_GET["color"];

    if(preg_match("/^[a-zA-Z]\w{5,17}$/i",$userName)){
        echo"用户名检测通过";
        echo"<br/>";
    }else{
        echo"用户名检测不通过";
        echo"<br/>";
    }

    if(preg_match("/^[a-zA-Z]\S{5,17}$/",$password)){
        echo"密码检测通过";
        echo"<br/>";
    }else{
        echo"密码检测不通过";
        echo"<br/>";
    }

    if(preg_match("/^([\w])+@([\w])+(\.[\w]+)+$/",$email)){
        echo"邮箱检测通过";
        echo"<br/>";
    }else{
        echo"邮箱检测不通过";
        echo"<br/>";
    }

    if(preg_match("/13[123569]{1}\d{8}|15[1235689]\d{8}|18\d{8}/",$number)){
        echo"号码检测通过";
        echo"<br/>";
    }else{
        echo"号码检测不通过";
        echo"<br/>";
    }

    if(preg_match("/^#[0-9a-fA-F]{6}$/",$color)){
        echo"颜色检测通过";
        echo"<br/>";
    }else{
        echo"颜色检测不通过";
         echo"<br/>";
    }




?>
</body>
</html>