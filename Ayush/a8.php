<?php
$a=12;
if($a==0){
    echo "Is Zero";
}    
else if($a>0){
    echo "Positive";
}   
else if($a<0){
    echo "Negative";
}
echo "<br>";
 $prime=2;
 $count=0;
 for($i=1;$i<=$prime;$i++)
 {
    if($prime%$i==0)
    {
        $count++;
    }
 }
 if($count==2)
 {
    echo "Number $prime is prime";
 }
 else 
 {
    echo "Number $prime is not prime";
 }
 echo "<br>";
    function sumMyNumbers(...$x) {
        $n = 0;
        $len = count($x);
        for($i = 0; $i < $len; $i++) {
          $n += $x[$i];
        }
        return $n;
      }
      
    $a = sumMyNumbers(5, 2, 6, 2, 7, 7);
    echo $a;
    echo "<br>";
    $num1=(int)readline("Enter first number");
    echo $num1;
?>