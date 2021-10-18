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

    public function run()
    {
        // Recoger los argumentos de $_GET
        // El método a ejecutar depende de un argumento $GET 
        if (isset($_GET['method'])) {
            $method = $_GET['method'];
        } else {
            //La primera vez ejecuta el método index
            //$method = 'index';
            $method = 'potencias2';
        }

        try {
            $this->$method();
        } catch (Throwable $th) {
            if (method_exists($this, $method)) {
                header("HTTP/1.0 500 Internal Server Error");
                return http_response_code(500);
                echo "Error en el servidor";
            } else {
                header("HTTP/1.0 404 Not Found");
                echo "No encontrado";
            }
        } finally {
            echo "<pre>";
            print_r($th);
        }
    }



    protected function index()
    {

    }

    protected function numeros()
    {
        $numvector = [];
    }

    public function fibonacci()
    {
        $fibon=[0,1];
        for($i=2;$i<100;$i++){
            $fibon[]=$fibon[$i-1]+$fibon[$i-2];
        }
        foreach ($fibon as $key => $value) {
            if($value < 1000000) {
                echo $value."<br>";
            }
            
        }

    }

    public function potencias2()
    {
        for($i=2;$i<25;$i++){
            echo pow(2,$i)."<br>";
        }
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
