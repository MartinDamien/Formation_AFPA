<?php

trait message
{
    public function msg()
    {
        echo "la POD c'est cool<br>";
    }
}

trait message2
{
    public function msg2()
    {
        echo "message msg2<br>";
    }
}

class bonjour
{
    use message;
}

class bonjour2
{
    use message, message2;
}

$b = new bonjour;
$b->msg();

$obj2 = new bonjour2();
$obj2->msg();
$obj2->msg2();
