<?php

namespace App;

class Perro extends Canino
{

    function __construct($dueño,$especie){
        $this->Canino(2,$dueño);
    }
    function comer()
    {
        echo 'Comer = el perro es alimentado por su dueño: ',$this->dueño,' - ';
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
