<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Arithmetic Operators</h1>
<?php
    $x=10;
    $y=4;
    echo ($x + $y);
    echo "<br>";
    echo ($x - $y);
    echo "<br>";
    echo ($x*$y);  
?>
<h1>Assignment Operators</h1>
<?php
    $x=10;
    $y=4;
    echo ($x+=$y);
    echo "<br>";
    echo ($x -= $y);
    echo "<br>";
    echo ($x*=$y);  
?>
<h1>Comparison Operators</h1>
<?php
    $x=10;
    $y=4;
    var_dump($x==$y);
    echo "<br>";
    var_dump($x != $y);
    echo "<br>";
    var_dump($x<=$y);  
    $a=10;
    $a++;
    echo $a++;
    echo "<br>";
    echo $a;
?>
<h1>Concatenation Operator</h1>
<?php
    $x="Ankit ";
    $y="Chauhan";
    echo $x . $y;
    echo "<br>";
    echo $x .= $y;
    echo "<br>";
    $marks=91;
    echo $marks<80?"Less":"Greater";
    echo "<br>";
    $name = $_GET['name']??'anonymous';
    echo $name;
    echo "<br>";
?>
<?php
    $x=array("a"=>"Red","b"=>"Green","c"=>"Blue");
    $y=array("u"=>"Yellow","v"=>"Orange","w"=>"Pink");
    $z=$x+$y;
    var_dump($z);
    echo "<br>";
?>
<?php
    echo 1<=>1;//0
    echo "<br>";
    echo 1<=>2;//-1
    echo "<br>";
    $a=`date`;
    echo $a ,"<br>";
    $s=5;
    echo abs($s), "<br>";
    $arr = [12,7,5,25,34];
    echo max($arr),"<br>";
    echo min($arr),"<br>";
    $b=6.534;
    echo ceil($b),"<br>";
    echo floor($b),"<br>";
    $deg = 45;
    echo "Radians: ",deg2rad($deg),"<br>";//p123456
    $n=10;
    $d=3;
    echo "Integer division result: ",intdiv($n,$d),"<br>";
    echo "Power = ",pow(2,3),"<br>";
    echo "Logarithm = ",log(10),"<br>";
    echo "Degree to radian =",rad2deg(1.5707),"<br>";
    echo "Squre root value is :",sqrt(5),"<br>";
    echo "Remainder = ",fmod(10,3),"<br>";

    $num=12;
    if($num<100);
    {
        echo "$num is less than 100 <br>";
    }
    $num1=15;
    if($num1%2!=0):
       echo "$num1 is an prime number<br>";
    else:
        echo "$num1 is not prime number<br>";
    endif
    
?>

</body>
</html>