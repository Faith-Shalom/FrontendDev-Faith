<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
/*$inLove = "true";
$noLove = "false";
if ($inLove && $noLove) {
    echo "Gustave and comfort have no relationship but Gustav loves Comfort";
}elseif(!$inLove && $noLove) {
    echo "NO RELATIONSHIP";
}else {
    echo "Gustav and comfort are in a serious relationship";
}*/
/*$num1 = "6";
$num2 = "4";
if ($num1 >= $num2){
    echo $num1 . "is the max number";
}else{
    echo $num2 ."is the max number";
}*/

/*function tri($b,$h){
    return 1/2*($b*$h);
}
echo tri (12,13);*/
$grade ="A"; 
switch ($grade)  {
    case ("A"):
        echo "Excellent";
        break;
        case ("B"):
            echo "B very good";
            break;
         case ("C"):
            echo "C good";
            default:
            echo "You have passed";
}
    

?>
</body>
</html>