<?php

namespace App;

class Perro extends Canino
{
    function __construct ($dueño,$altura,$peso,$largo,$color,$ubicacion)
    {
        $this->dueño = $dueño;
        $this->altura = $altura;
        $this->peso = $peso;
        $this->largo = $largo;
        $this->color = $color;
        $this->ubicacion = $ubicacion;
        $this->clase = "Perro";
    }

    function clase ()
    {
        echo '<br>';
        echo 'Clase = ',$this->clase;
    }

    function comer ()
    {
        echo '<br>';
        echo 'Comer = el perro es alimentado por su dueño = ',$this->dueño,'<br>';
    }

    function dormir ()
    {
        echo 'Dormir = : jardin o dentro de la casa','<br>';
    }

    function correr ()
    {
        echo 'Correr =','<br>';
    }

    function rugir ()
    {
        echo 'Rugir = Ladrar','<br>';
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
