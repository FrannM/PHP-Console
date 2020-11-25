<?php

    namespace automotores;

    /*
    namespace App\modulo\algomas\;
    use App\modulo\algomas\ as App;
    new App\auto;
    */

    class Auto {
        public $ruedas;
        public $puertas;
        public $modelo;

        function __construct($modelo,$puertas,$ruedas)
        {
            $this->modelo = $modelo;
            $this->puertas = $puertas;
            $this->ruedas = $ruedas;
        }

        function getAuto(){
            return "El modelo es " . $this->modelo . " y tiene " . $this->puertas . " puertas.";
        }
    }
