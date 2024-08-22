<?php
    define("courses",[
        "PHP",
        "HTML",
        "CSS"
    ]);
    echo courses[0];
    echo "The current Line Number is".__LINE__.".<br>";
    echo "Current PHP file is".__FILE__.".<br>";
    echo "Current Class is".__CLASS__.".<br>";
    echo "Current Function is".__FUNCTION__.".<br>";
    echo "Current Method is".__METHOD__.".<br>";
    echo "Current directory is".__DIR__.".";
    