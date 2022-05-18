<?php
$s = "hello";
$f = function () use (&$s) {
    echo $s;
};

$s = "how are you ta soeur?";
$f(); //how are you ?