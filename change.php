<html>  
  <head>      
      <title>change</title>  
      </head>  
  <body>
<?php

$string = "Hello_world";

$string1="get_field_by_id";

echo GaiBian($string);
echo "<br/>";

echo GaiBian($string1);



function GaiBian($string){

    $token =strtok($string, "_");//分割字符串



    while ($token != false)

    {

        $token=ucfirst($token);//给首字母大写

        echo "$token";

        $token = strtok("_");

    }

}





?>
</body>
</html>