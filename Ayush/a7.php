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
?>

</body>
</html>