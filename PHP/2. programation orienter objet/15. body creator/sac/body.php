<?php

class Body
{
    private $head;
    private $tronc;
    private $jambes;
    public function __construct(Head $head, Tronc $tronc, Jambes $jambes)
    {
        $this->head = $head;
        $this->tronc = $tronc;
        $this->jambes = $jambes;
    }
    public function getHead()
    {
        return $this->head;
    }
    public function getTronc()
    {
        return $this->tronc;
    }
    public function getJambes()
    {
        return $this->jambes;
    }
    public function getYeux()
    {
        return $this->head->getYeux();
    }
}

// $b = new Body(new Head("Bleus","Droit","Grande"));
// print_r($b);