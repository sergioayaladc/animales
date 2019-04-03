<?php

namespace App;

class Lobo extends Canino
{
    function __construct ($camada,$especie,$altura,$peso,$largo,$color,$ubicacion)
    {
        $this->camada = $camada;
        $this->especie = $especie;
        $this->altura = $altura;
        $this->peso = $peso;
        $this->largo = $largo;
        $this->color = $color;
        $this->ubicacion = $ubicacion;
        $this->clase = "Lobo";
    }

    function clase ()
    {
        echo '<br>';
        echo 'Clase = ',$this->clase,'<br>';
    }

    function comer ()
    {
        echo 'Comer = cazan en grupo','<br>';
    }

    function dormir ()
    {
        echo 'Dormir = duermen en los bosques, en cuevas, viven en grupos','<br>';
    }

    function correr ()
    {
        echo 'Correr =','<br>';
    }

    function rugir ()
    {
        echo 'Rugir = rugen aullando en luna llena','<br>';
    }

    function camada ()
    {
        echo 'Camada = numero de integrantes en su camada: ',$this->camada,'<br>';
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

    function peso ()
    {
        echo 'Peso : ',$this->peso,' Kilos','<br>';
    }

    function especie ()
    {
        echo 'Especie : ',$this->especie,'<br>';
    }

    function largo ()
    {
        echo 'Largo : ',$this->largo,' Cm','<br>';
    }
}
