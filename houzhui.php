<html>  
  <head>      
      <title>求后缀名</title>  
      </head>  
  <body>
<?php
$file="abc.exe.txt";

function fun($file){
    return strrchr($file,".");}
echo fun($file);

?>
</body>
</html>