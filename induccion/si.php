<?php
$num1=$_POST['num1'];
$num2=$_POST['num2'];
$opcion=$_POST['opcion'];
$result=0;

// ||  &&
 
if ($opcion=="+") {
    $result=$num1+$num2;
}else if ($opcion=="-") {
    $result=$num1-$num2;
}else if ($opcion=="*"){
    $result=$num1*$num2;
}else{
    $result=$num1/$num2;
}

echo "<h2> El resultado es: ".$result."</h2>";
?>