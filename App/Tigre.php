<?php

namespace App;

class Tigre extends Felino
{
    function __construct($altura,$peso,$largo,$color,$ubicacion){
       $this->altura = $altura;
       $this->peso = $peso;
       $this->largo = $largo;
       $this->color = $color;
       $this->ubicacion = $ubicacion;
       $this->clase = "Tigre";
    }

    function clase(){
        echo '<br>';
        echo 'Clase = ',$this->clase;
    }

    function comer()
    {
        echo '<br>';
        echo 'Comer = Cazan solos ','<br>';
    }
    function dormir()
    {
        echo 'Dormir = :','<br>';
    }

    function correr()
    {
        echo 'Correr =','<br>';
    }
    function rugir(){
        echo 'Rugir = rugen aullando en luna llena','<br>';
    }
    function ubicacion(){
        echo 'Ubicacion : ',$this->ubicacion,'<br>';
    }
    function color(){
        echo 'Color : ',$this->color,'<br>';
    }
    function altura(){
        echo 'Altura : ',$this->altura,' Metros','<br>';
    }
    function largo(){
        echo 'Largo : ',$this->largo,' Cm','<br>';
    }
    function peso(){
        echo 'Peso : ',$this->peso,' Kilos',  '<br>';
    }
    function especie(){
        echo 'Especie : ','<br>';
    }
    function camada(){

    }
}
