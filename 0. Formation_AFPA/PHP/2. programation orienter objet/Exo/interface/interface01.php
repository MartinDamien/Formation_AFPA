<?php
interface Animal {
    public function makesound();
    public function mange();
}

interface parcourable {
    public function parcours();
}
class Chat implements Animal,parcourable {
    public function makesound(){
        echo "miaou";}
    
    public function mange(){
    echo "chat mange";}

    public function parcours()
    {
        echo "100 Km";
    }
    
}