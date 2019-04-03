<?php

namespace App;

abstract class Canino extends Mamifero
{
    protected $camada;

    protected $especie;

    protected $altura;

    protected $peso;

    protected $color;

    protected $largo;

    protected $ubicacion;

    protected $clase;

    public function Canino ($camada,$especie,$altura,$peso,$largo,$color)
    {
        $this->camada = $camada;
        $this->especie = $especie;
        $this->altura = $altura;
        $this->largo = $largo;
        $this->peso = $peso;
        $this->color = $color;
    }
}