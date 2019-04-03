<?php

namespace App;

class Leon extends Felino
{
    function __construct ($altura,$peso,$largo,$color,$ubicacion)
    {
        $this->altura = $altura;
        $this->peso = $peso;
        $this->largo = $largo;
        $this->color = $color;
        $this->ubicacion = $ubicacion;
        $this->clase = "Leon";
    }

    function clase ()
    {
        echo '<br>';
        echo 'Clase = ',$this->clase;
    }

    function comer ()
    {
        echo '<br>';
        echo 'Comer = cazan en manada, principalmente gacelas y ñues ','<br>';
    }

    function dormir ()
    {

    }

    function correr ()
    {
        echo 'Correr =','<br>';
    }

    function rugir ()
    {
        echo 'Rugir = rugir muy fuertes, capaz de oirse más de 8 km de distancia','<br>';
    }

    function ubicacion ()
    {
        echo 'Ubicacion : ',$this->ubicacion,'<br>';
    }

    function color ()
    {
        echo 'Color : ',$this->color,'<br>';
    }

    function altura ()
    {
        echo 'Altura : ',$this->altura,' Metros','<br>';
    }

    function largo ()
    {
        echo 'Largo : ',$this->largo,' Cm','<br>';
    }

    function peso ()
    {
        echo 'Peso : ',$this->peso,' Kilos','<br>';
    }

    function especie ()
    {
        echo 'Especie : ','<br>';
    }

    function camada ()
    {

    }
}
