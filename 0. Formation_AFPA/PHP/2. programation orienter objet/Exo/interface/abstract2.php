<?php

abstract class Animal {
abstract function cri() ;}

class Chat extends Animal{
public function cri(){
    echo "Miaouu!!!";}
}

class Chien extends Animal{
public function cri(){
    echo "Ouaf!!!";}
}

class vache extends Animal{
public function cri(){
    echo "Meuh!!!";}
}

$a = new Chat();
$a->cri();