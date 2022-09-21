<?php

function foo()
{
    global $color;

    include 'color.php';

    echo " A $color $fruit";
}
foo();
?>
