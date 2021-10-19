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
            $method = 'indice';
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



    protected function indice()
    {

        echo "<ul>";
        echo "<li><a href=\"/DAW/Servidor/Ejercicios/Unidad3/Ejercicio07/?method=fibonacci\">Fibonacci</a></li>";
        echo "<li><a href=\"/DAW/Servidor/Ejercicios/Unidad3/Ejercicio07/?method=potencias2\">Potencia de 2</a></li>";
        echo "<li><a href=\"/DAW/Servidor/Ejercicios/Unidad3/Ejercicio07/?method=factoriales\">Factoriales</a></li>";
        echo "<li><a href=\"/DAW/Servidor/Ejercicios/Unidad3/Ejercicio07/?method=primo\">Numeros primos</a></li>";
        echo "</ul>";
    }



    public function fibonacci()
    {
        $this->indice();
        echo "Fibonacci<br><br>";
        $fibon = [0, 1];
        for ($i = 2; $i < 50; $i++) {
            $fibon[$i] = $fibon[$i - 1] + $fibon[$i - 2];
        }

        foreach ($fibon as $key => $value) {
            if ($value < 1000000) {
                echo $key . " => " . $value . "<br>";
            }
        }
    }

    protected function potencias2()
    {
        $this->indice();
        $pot=[];
        echo "Potencia de 2 hasta 25<br><br>";
        for ($i = 2; $i < 25; $i++) {
            $pot[]= pow(2, $i);
        }
        foreach ($pot as $key => $value) {
            echo $key . " => " . $value . "<br>";
        }
    }

    public function factoriales()
    {
        $this->indice();
        echo "Factoriales<br><br>";
        $fact = [1];
        for ($i = 1; $i < 1000000; $i++) {
            $fact[$i] = $fact[$i - 1] * $i;
        }
        foreach ($fact as $key => $value) {
            if ($value < 1000000) {
                echo $key . " => " . $value . "<br>";
            }
        }
    }

    public function primo()
    {
        $this->indice();
        echo "Primos<br><br>";
        $primos = [];
        for ($i = 1; $i < 10000; $i++) {
            $contador = 0;
            for ($j = 1; $j <= $i; $j++) {
                if ($i % $j == 0) {
                    $contador++;
                }
            }
            if ($contador < 3) {
                $primos[] = $i;
            }
        }
        foreach ($primos as $key => $value) {
            echo $key ." => " . $value . "<br>";
        }
    }
}
