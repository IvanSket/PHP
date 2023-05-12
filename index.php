<?php
//if
$num = 3;
if($num <= 3){
    echo "SOn igual al 3" . "<br>";
}
//switch
$num2 = 4;
switch($num2){
    case 1: echo "soy le uno";
    break;
    case 4: echo "soy el cuatro";
    break;
    default: echo "fallaste";
    break;

}

//while
$i = 1;
wile($i <= 10){
    echo $i;
    $i++;
}
// do while
$q = 1;
do{
    echo $q;
    $q++;
}while($q <= 10);
echo "<br";

//for
for($w = 1; $w <=10; $w++){
    echo $w;
}

?>