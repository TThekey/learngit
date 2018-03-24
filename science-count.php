<html>  
  <head>      
      <title>科学计数法</title>  
      </head>  
  <body>
<?php
$s = '1234567890';
$count = 3;
echo $s;
echo '<br>';
echo test($s,$count);
function test($s='',$count=3){
    if(empty($s) || $count <= 0){
        return false;
    }
    $str = strrev($s);
    $arr = str_split($str,$count);
    $new_s = join(',',$arr);
    return strrev($new_s);
}
?>
</body>
</html>