<?php

namespace App;

class Index
{
    static function run ()
    {

        $lobo = new lobo(2,"Americano",1.81,60,30,"Gris","Estados Unidos");
        $lobo->clase ();
        $lobo->comer ();
        $lobo->dormir ();
        $lobo->rugir ();
        $lobo->camada ();
        $lobo->especie ();
        $lobo->altura ();
        $lobo->peso ();
        $lobo->largo ();
        $lobo->color ();
        $lobo->ubicacion ();

        $perro = new perro("Camilo",1.81,20,30,"Cafe","Chile");
        $perro->clase ();
        $perro->comer ();
        $perro->dormir ();
        $perro->rugir ();
        $perro->altura ();
        $perro->peso ();
        $perro->largo ();
        $perro->color ();
        $perro->ubicacion ();

        $tigre = new tigre(1.91,150,180,"amarillo y blanco","Africa");
        $tigre->clase ();
        $tigre->comer ();
        $tigre->altura ();
        $tigre->peso ();
        $tigre->largo ();
        $tigre->color ();
        $tigre->ubicacion ();

        $leon = new leon(1.62,120,130,"amarillo y cafe","Sudafrica");
        $leon->clase ();
        $leon->comer ();
        $leon->rugir ();
        $leon->altura ();
        $leon->peso ();
        $leon->largo ();
        $leon->color ();
        $leon->ubicacion ();
    }
}
