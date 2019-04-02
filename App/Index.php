<?php


namespace App;


class Index
{
     static function run(){

         $lobo = new lobo(2,"Americano");
         $lobo->comer ();
         $lobo->dormir ();
         $lobo->correr ();
         $lobo->rugir ();
         $lobo->camada ();



         $perro = new perro("Sergio","Pekines");
         $perro->comer ();
         $perro->dormir ();
         $perro->correr ();
         $perro->rugir ();
    }
}
