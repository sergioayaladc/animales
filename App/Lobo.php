<?php

namespace App;

class Lobo extends Canino
{

     function __construct($camada,$dueño){
        $this->Canino($camada,$dueño);
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
