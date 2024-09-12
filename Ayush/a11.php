<?php
    // $numbers = array(23,34,12,1,11);
    // // $count=count($numbers);
    // // print_r($count);
    // asort($numbers);
    // print_r($numbers);
    // krsort($numbers);
    // print_r($numbers);

    // $student = array(
    //     "name" => "John Smith",
    //     "age" => 20,
    //     "university" => "ABC University"
    // );

    // if(array_key_exists("age",$student))
    // {
    //     echo "Age exits in the student array.";
    // }
    // else
    // {
    //     echo "Age does not exist in the student array.";
    // }
    // $fruits=array("Apple","Banana","Orange");
    // unset($fruits[1]);
    // print_r($fruits);
    // $name = array("Manoj","Rahul","Aneesh");
    // $marks = array(75,89,44);
    // $c=array_combine($name,$marks);
    // print_r($c);
    // $courses=array("PHP","Laravel","NodeJs","HTML","CSS","ASP.NET");
    // print_r(array_chunk($courses,2));
    $a1=array(34,23,12,11,10);
    $a2=array(34,23,12,11,10);
    // $result=array_diff($a1,$a2);
    // print_r($result);
    $result=array_flip($a1);
    print_r($result);
?>