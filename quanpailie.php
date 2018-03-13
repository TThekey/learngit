<html>  
  <head>      
      <title>Example</title>  
      </head>  
  <body>
   <?php
function func2($arr, $str){
$cnt = count($arr);
if($cnt == 1){
echo $str . $arr[0] . "\n<br>";
}
else {
for ($i = 0; $i < count($arr); $i++) {
$tmp = $arr[0];
$arr[0] = $arr[$i];
$arr[$i] = $tmp;
func2(array_slice($arr, 1), $str . $arr[0]);
}
}
}
$a = array('2','3','5');
func2($a, '');
?>  
 </body>
</html>
