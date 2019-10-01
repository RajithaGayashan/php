<?php
function myTest(){
    $x=5;//local scope
    echo "<p>Variable x inside function is : $x</p> ";
}
myTest();
//echo "<p>variable x outside function is:$x</p>"
?>