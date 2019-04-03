<?php

namespace App;

abstract class Felino extends Mamifero
{
    protected $altura;

    protected $peso;

    protected $color;

    protected $largo;

    protected $ubicacion;

    public function Canino ($altura,$peso,$largo,$color,$ubicacion)
    {
        $this->altura = $altura;
        $this->largo = $largo;
        $this->peso = $peso;
        $this->color = $color;
        $this->ubicacion = $ubicacion;
    }
}