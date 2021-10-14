<?php

class App
{
    public function __construct($name = "Aplicación PHP")
    {
        // echo "Construyendo la app <hr>";
        $this->name = $name;
        $this->module = "Desarrollo Web en Entorno Servidor";
        $this->teacher = "Ester Grao";
        $this->student = "Sergio López García";
    }

    protected function numeros()
    {
        $numvector=[];
    }

    public function fibonacci()
    {
    }

    public function potencias2()
    {
    }

    public function factoriales()
    {
    }

    public function primo()
    {
        $contador = 0;
        for ($i = 1; $i < 10000; $i++) {
            for ($j = 0; $j < $i; $j++) {
                if ($i % $j == 0) {
                    $contador++;
                }
            }
        }
    }
}
