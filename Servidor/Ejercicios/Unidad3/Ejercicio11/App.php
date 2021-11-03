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
        session_start();
        // Recoger los argumentos de $_GET
        // El método a ejecutar depende de un argumento $GET 
        if (isset($_GET['method'])) {
            $method = $_GET['method'];
        } else {
            //La primera vez ejecuta el método index
            $method = 'login';
        }
        $this->$method();
        /*
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
        } */
    }


    protected function login()
    {
        include('views/login.php');
    }

    protected function auth()
    {
        if (!empty($_POST['name'])) {
            $nombre = $_POST['name'];
            $contraseña = $_POST['pss'];
            $_SESSION['nombre']=$nombre;
            $_SESSION['contraseña']=$contraseña;
        }
        //App::home();
        header('Location: index.php?method=home');
    }

    protected function home()
    {
        include('views/home.php');
    }

    protected function logout()
    {
        
        //$nombre = $_POST['name'];
        //$contraseña = $_POST['pss'];
        $deseo[] = $_POST['deseo'];
        unset($_SESSION['nombre']);
        unset($_SESSION['contraseña']);
        unset($_SESSION['deseo']);
        session_destroy();
        include('views/login.php');
    }

    public function new()
    {
        $new = $_POST['new'];
        if (isset($_SESSION['deseo'])) {
            $deseo = unserialize($_SESSION['deseo']);
        } else {
            $deseo = [];
        }
        $deseo[] = $new;

        $_SESSION['deseo']=serialize($deseo);
        
        //include('views/home.php');
        header('Location: index.php?method=home');
    }

    protected function delete()
    {
        if (isset($_SESSION['deseo'])) {
            $deseo = unserialize($_SESSION['deseo']);
        } else {
            $deseo = [];
        }
        $id = $_GET['id'];
        unset($deseo[$id]);
        $_SESSION['deseo']=serialize($deseo);
        include('views/home.php');
    }

    protected function empty()
    {
        unset($_SESSION['deseo']);
        include('views/home.php');
    }
}
