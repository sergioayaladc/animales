<?php

namespace App;

abstract class Felino extends Mamifero{
    protected $camada = [];
    public $dueño = array();



    function __construct($especie){
        $this->Canino();
    }
    function comer()
    {
        echo 'Comer =  ',' - ';
    }

    function dormir()
    {
        echo 'Dormir = :',' - ';
    }

    function correr()
    {
        echo 'Correr =',' - ';
    }
    function rugir(){
        echo 'Rugir = rugen aullando en luna llena','<br>'.'<br>';
    }
    function camada(){

    }

    function ubicacion(){
        echo 'su ubicacion : ','<br>';
    }
    function color(){
        echo 'su color : ','<br>';
    }
    function altura(){
        echo 'su altura : ','<br>';
    }
    function peso(){
        echo 'su peso : ','<br>';
    }
    function especie(){
        echo 'su especie : ','<br>';
    }

}