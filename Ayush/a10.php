<?php
    echo strpos("Ankit Chauhan","Chauhan"),"\n";
    echo str_word_count("Ankit loves hema"),"\n";
    echo  str_replace("XYZ","Ankit","XYZ loves hema and so do hema loves XYZ"),"\n";
    echo strtolower("Ankit loves hema very much"),"\n";
    echo ucfirst("hema loves Ankit's body"),"\n";
    $arr1=[1,2,3,4,5];
    $arr2=array("one"=>1,"two"=>2,"three"=>3);
    print_r($arr1);
    print_r($arr2);
    var_dump($arr1);
    var_dump($arr2);
    echo count($arr1),"\n";
    echo count($arr2),"\n";
    for($x=0;$x<count($arr1);$x++)
    {
        echo $arr1[$x]," ";
    }
    echo "\n";
    $StudentInformation=array("Name"=>"Ayush Rao","Roll No"=>03,"Domain"=>"FSWD","Marks"=>"NIL","Result"=>"Pass");
    var_dump($StudentInformation);
?>
<?php
    $result=array(array("Manoj",7.8,"pass"),array("Aditya",8.5,"pass"),array("Anuj",4.9,"fail"));
    for($row=0;$row<3;$row++)
    {
        echo "Row Number $row ";
        for($col=0;$col<3;$col++)
        {
            echo $result[$row][$col],"\n";
        }
    }
    echo "\n";

    $numbers = array(1,2,3,4,5);
    $count=count($numbers);
    echo "\n"+$count;
    // array_change_key_case
    //array_chunk
    //array_combine
    //array_count_values
    //array_diff_assoc
    //array_diff
    //array_fill
    //array_flip
    //array_key_exits
    //array_key
    //array_merge
    //array_multisort
    //array_pad
    //array_pop
    //array_push
    //array_reverse
    //array_reverse
    //array_search
    //array_shift
    //array_slice
?>