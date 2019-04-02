<?php

namespace App;

class Tigre extends Felino
{
    function __construct($camada){
        $this->Canino($camada);
    }
    function comer()
    {
        echo 'Comer = cazan en grupo',' - ';
    }

    function dormir()
    {
        echo 'Dormir = : duermen en los bosques, en cuevas, viven en grupos',' - ';
    }

    function correr()
    {
        echo 'Correr =',' - ';
    }
    function rugir(){
        echo 'Rugir = rugen aullando en luna llena',' - ';
    }
    function camada(){
        echo 'Camada = numero de integrantes en su camada: ',$this->camada[0],'<br>';
    }

    function ubicacion(){
        echo 'su peso : ',$this->camada[0],'<br>';
    }
    function color(){
        echo 'su peso : ',$this->camada[0],'<br>';
    }
    function altura(){
        echo 'su peso : ',$this->camada[0],'<br>';
    }
    function peso(){
        echo 'su peso : ',$this->camada[0],'<br>';
    }
}
