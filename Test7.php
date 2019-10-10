//global keyword
<?php
$a=10;
$b=20;
function myTest(){
    global $a,$b;
    $a=$a+$b;
}
myTest();
echo $a;
?>