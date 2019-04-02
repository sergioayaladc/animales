<?php

namespace App;

abstract class Canino extends Mamifero{
    protected $camada = [];
    protected $dueño = '';



    public function Canino($camada,$dueño){
        array_push($this->camada,$camada,$this->dueño,$dueño);
    }

}