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
            $method = 'login';
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


    protected function login()
    {
        include('views/login.php');
    }

    protected function auth()
    {
        if (!empty($_POST['name'])) {
            $nombre = $_POST['name'];
            $contraseña = $_POST['pss'];
            setcookie('nombre', $nombre, time() + 3600 * 24);
            setcookie('contraseña', $contraseña, time() + 3600 * 24);
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
        $nombre = $_POST['name'];
        $contraseña = $_POST['pss'];
        $deseo[] = $_POST['deseo'];
        setcookie('nombre', $nombre, time() - 3600 * 24);
        setcookie('contraseña', $contraseña, time() - 3600 * 24);
        setcookie('deseo', serialize($deseo), time() - 3600 * 24);
        include('views/login.php');
    }

    protected function new()
    {
        $new = $_POST['new'];
        if (isset($_COOKIE['deseo'])) {
            $deseo = unserialize($_COOKIE['deseo']);
        } else {
            $deseo = [];
        }
        $deseo[] = $new;
        setcookie('deseo', serialize($deseo), time() + 3600 * 24);
        //include('views/home.php');
        header('Location: index.php?views/home.php');
    }

    protected function delete()
    {
        if (isset($_COOKIE['deseo'])) {
            $deseo = unserialize($_COOKIE['deseo']);
        } else {
            $deseo = [];
        }
        $id = $_GET['id'];
        unset($deseo[$id]);
        setcookie('deseo', serialize($deseo), time() + 3600 * 24);
        include('views/home.php');
    }

    protected function empty()
    {
        $deseo = $_POST['deseo'];

        setcookie('deseo', $deseo, time() - 3600 * 24);

        include('views/home.php');
    }
}
