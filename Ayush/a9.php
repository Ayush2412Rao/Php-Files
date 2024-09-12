<?php 
    $num1=(int)readline("Enter number 1: ");
    $num2=(int)readline("Enter number 2: ");
    echo $num1+$num2."\n";
    echo $num1-$num2;
    echo "\n";
    $size=(int)readline("Enter the size of the array: ");
    $myArray=[];
    for($i=0;$i<$size;$i++)
    {
        $myArray[$i]=(int)readline("Enter the element: ");
        echo "\n";
    }
    $sum=0;
    for($i=0;$i<$size;$i++)
    {
        $sum = $sum + $myArray[$i];
        echo "\n";
    }

    print_r("Sum is : ".$sum);

    echo "\n";
    
    $i=1;
    while($i<=3)
    {
        $i++;
        echo "The number is ". $i ."\n";
    }
?>