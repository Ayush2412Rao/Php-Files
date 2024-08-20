<?php
    $a=11;
    function abc()
    {
        global $a;
        echo "variable inside the function is: $a, <br>";

    }
    abc();
    {
        echo "Variable inside the function is : $a";
    }
?>