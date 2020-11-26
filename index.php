<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>PHP Console</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">PHP Console</a>
    </nav>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Consola de PHP</h1>
            <p class="lead">Esto es una consola....</p>
        </div>
    </div>

    <div class="container">

        <?php
        include('person.php');
        include('automotores/auto.php');
        include('automatizacion/auto.php');
        include('connection.php');
        ?>

        <div class="row">
            <div class="col-12">
                <div class="p-3 m-2 bg-dark text-white">
                    <h4>Base de datos</h4> <br>
                    <?php
                    $persons = $conn->query('SELECT * from persons');


                    foreach ($persons as $person) {
                        echo "Nombre Completo: " . $person['First Name'] . " " . $person['Last Name'] . "<br>";
                    }


                    $conn = null;
                    ?>
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-12">
                <div class="p-3 m-2 bg-primary text-white">
                    <h4>Namespaces</h4> <br>
                    <?php
                    $automotor = new automotores\Auto("Ford", 4, 4);
                    $automatizador = new automatizacion\Auto("Bot social", 10, "Miércoles 2 de Diciembre de 2020");

                    echo $automotor->getAuto() . "<br>";
                    echo $automatizador->getAuto() . "<br>";
                    ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="p-3 m-2 bg-danger text-white">
                    <h4>Include</h4>
                    <?php
                    $person = new Person("Max", "Tompson");

                    echo $person->greetings();
                    ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="p-3 m-2 bg-dark text-white">
                    <h4>Formularios GET</h4>
                    <form class="form-inline" method="GET" action="#">
                        <div class="form-group mx-sm-3 mb-2">
                            <label for="saludo" class="sr-only">Saludo</label>
                            <input type="text" class="form-control" id="saludo" name="saludo" placeholder="Di algo...">
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">Confirmar</button>
                    </form>

                </div>

            </div>
            <div class="col-6">
                <div class="p-3 m-2 bg-success text-white">
                    <h4>Formularios GET</h4>
                    <?php
                    if (isset($_GET['saludo'])) {
                        echo $_GET['saludo'];
                    } else {
                        echo "Esperando saludo...";
                    }
                    ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="p-3 m-2 bg-dark text-white">
                    <h4>Calculadora Form</h4>
                    <form class="form-inline" method="POST" action="#">
                        <div class="form-group mx-sm-1 mb-2">
                            <label for="num1" class="sr-only">Número 1</label>
                            <input type="number" class="form-control" id="num1" name="num1" placeholder="Ingrese el número 1">
                        </div>
                        <div class="form-group mx-sm-1 mb-2">
                            <input type="number" class="form-control" id="num2" name="num2" placeholder="Ingrese el número 2">
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">Sumar</button>
                    </form>
                </div>
            </div>
            <div class="col-6">
                <div class="p-3 m-2 bg-success text-white">
                    <h4>Calculadora Result</h4>
                    <?php
                    if (isset($_POST['num1']) && isset($_POST['num2'])) {
                        $result = $_POST['num1'] + $_POST['num2'];
                        echo "El resultado es: " . $result;
                    } else {
                        echo "Esperando calculo";
                    }
                    ?>
                </div>

            </div>
        </div>


        <div class="row">
            <div class="col-6">
                <div class="p-3 m-2 bg-dark text-white">
                    <h4>Formularios POST</h4>
                    <form class="form-inline" method="POST" action="#">
                        <div class="form-group mx-sm-3 mb-2">
                            <label for="saludo" class="sr-only">Saludo</label>
                            <input type="text" class="form-control" id="saludo" name="saludo" placeholder="Di algo...">
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">Confirmar</button>
                    </form>

                </div>

            </div>
            <div class="col-6">
                <div class="p-3 m-2 bg-success text-white">
                    <h4>Formularios POST</h4>
                    <?php
                    if (isset($_POST['saludo'])) {
                        echo $_POST['saludo'];
                    } else {
                        echo "Esperando saludo...";
                    }
                    ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="p-3 m-2 bg-danger text-white">
                    <h4>Métodos estáticos (Calculadora)</h4>
                    <?php
                    class Calculadora
                    {
                        public static function sumar($num1, $num2)
                        {
                            return $num1 + $num2;
                        }
                        public static function restar($num1, $num2)
                        {
                            return $num1 - $num2;
                        }
                    }

                    echo "El resultado de la suma es " . Calculadora::sumar(1, 1) . "<br>";
                    echo "El resultado de la resta es " . Calculadora::restar(5, 1) . "<br>";


                    /*
                    $calc = new Calculadora();
                    echo "El resultado de la suma es " . $calc->sumar(1,1) . "<br>";
                    echo "El resultado de la resta es " . $calc->restar(5,1) . "<br>";
                    */
                    ?>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="p-3 m-2 bg-info text-white">
                    <h4>Herencia</h4> <br>
                    <?php
                    class Mascotas
                    {
                        public $nombre;
                        public $patas;

                        public function __construct($nombre, $patas)
                        {
                            $this->nombre = $nombre;
                            $this->patas  = $patas;
                        }

                        public function eat()
                        {
                            return "Estoy comiendo!";
                        }
                    }

                    class Perro extends Mascotas
                    {
                        function run()
                        {
                            return "Estoy corriendo";
                        }
                    }

                    class Gato extends Mascotas
                    {
                    }

                    $Simba = new Gato("Simba", 4);
                    $Cindy = new Perro("Cindy", 4);

                    echo $Cindy->run() . "<br>";
                    echo $Simba->eat() . "<br>";

                    ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="p-3 m-2 bg-success text-white">
                    <h4>POO</h4> <br>
                    <?php
                    class Mascota
                    {
                        public $nombre;
                        public $tipo;
                        public $patas = 4;

                        function __construct($nombre, $patas, $tipo)
                        {
                            $this->nombre = $nombre;
                            $this->tipo = $tipo;
                            $this->patas = $patas;
                        }

                        public function getDesc()
                        {
                            if ($this->patas == 0) {
                                return "Tu mascota es un " . $this->tipo . ", se llama " . $this->nombre . " y no tiene patas.";
                            } else
                                return "Tu mascota es un " . $this->tipo .  ", se llama " . $this->nombre . " y tiene " . $this->patas . " patas.";
                        }
                    }

                    $perro = new Mascota("Cindy", 4, "perro");
                    $gato = new Mascota("Simba", 4, "gato");
                    $pez = new Mascota("Flipy", 0, "pez");

                    echo $perro->getDesc() . "<br>";
                    echo $gato->getDesc() . "<br>";
                    echo $pez->getDesc();


                    ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="p-3 m-2 bg-danger text-white">
                    <h4>Funciones</h4> <br>
                    <?php
                    function calc($sign, $num1, $num2)
                    {
                        switch ($sign) {
                            case '+':
                                return $num1 + $num2;
                                break;
                            case '-':
                                return $num1 - $num2;
                                break;
                            default:
                                return 0;
                                break;
                        }
                    }

                    $result = calc("-", 3, 7);

                    echo "El resultado es: " . $result;
                    ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="p-3 m-2 bg-dark text-white">
                    <h4>Break</h4> <br>
                    <?php
                    $names = array("Max", "Tom", "Sarah", "Frann");

                    foreach ($names as $name) {
                        if ($name == "Sarah") {
                            break;
                        }

                        echo $name . "<br>";
                    }
                    ?>
                </div>
            </div>
            <div class="col-6">
                <div class="p-3 m-2 bg-warning text-white">
                    <h4>Continue</h4> <br>
                    <?php
                    $names = array("Max", "Tom", "Sarah", "Frann");

                    foreach ($names as $name) {
                        if ($name == "Sarah") {
                            continue;
                        }

                        echo $name . "<br>";
                    }
                    ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <div class="p-3 m-2 bg-primary text-white">
                    <h4>Arrays</h4> <br>
                    <?php
                    $nums = array(1, 4, 6, 7);

                    for ($i = 0; $i < count($nums); $i++) {
                        echo $nums[$i] . "<br>";
                    }
                    ?>
                </div>
            </div>
            <div class="col-4">
                <div class="p-3 m-2 bg-success text-white">
                    <h4>Arrays</h4> <br>
                    <?php
                    $names = array("Max", "Tom", "Sarah", "Frann");

                    for ($i = 0; $i < count($names); $i++) {
                        echo $names[$i] . "<br>";
                    }
                    ?>
                </div>
            </div>
            <div class="col-4">
                <div class="p-3 m-2 bg-info text-white">
                    <h4>Foreach</h4> <br>
                    <?php
                    $names = array("Max", "Tom", "Sarah", "Frann");

                    foreach ($names as $name) {

                        echo $name . "<br>";
                    }
                    ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="p-3 m-2 bg-secondary text-white">
                    <h3>Bucle While</h3> <br>
                    <?php
                    $num = 0;

                    while ($num <= 5) {
                        echo "El numero es: " . $num . "<br>";
                        $num++;
                    }

                    ?>

                </div>
            </div>
            <div class="col-6">
                <div class="p-3 m-2 bg-warning text-white">
                    <h3>Bucle For</h3> <br>
                    <?php

                    for ($i = 0; $i <= 5; $i++) {
                        echo "El numero es: " . $i . "<br>";
                    }

                    ?>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="p-3 m-2 bg-dark text-white">
                    <h3>Condicional SWITCH</h3> <br>
                    <?php
                    $num = 4;

                    switch ($num) {
                        case '1':
                            echo "La calificación es muy baja";
                            break;
                        case '2':
                            echo "La calificación es muy baja";
                            break;
                        case '3':
                            echo "La calificación es muy baja";
                            break;
                        case '4':
                            echo "La calificación es mediocre!";
                            break;
                        case '5':
                            echo "La calificación es mediocre!";
                            break;
                        case '6':
                            echo "La calificación es buena!";
                            break;
                        case '7':
                            echo "La calificación es buena!";
                            break;

                        case '8':
                            echo "La calificación es buena!";
                            break;

                        case '9':
                            echo "La calificación es buena!";
                            break;

                        case '10':
                            echo "La calificación es excelente!";
                            break;

                        default:
                            echo "La calificación no es válida";
                            break;
                    }

                    /*
                            if ($num == 1) {
                                echo "La calificación es muy baja";
                            } elseif ($num == 2 || $num == 4) {
                                echo "La calificación sigue siendo baja!";
                            } elseif ($num == 6) {
                                echo "La calificación es mediocre!";
                            } elseif ($num == 8) {
                                echo "La calificación es buena!";
                            } elseif ($num == 10) {
                                echo "La calificación es excelente!";
                            } else {
                                echo "La calificación no es válida";
                            }
                            */

                    ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="p-3 m-2 bg-success text-white">
                    <h3>Condicional IF</h3> <br>
                    <?php
                    $name = "Fran";
                    $year = 2001;


                    if ($year > 1950 && $year < 2019) {
                        echo "Estas viviendo en esta época! <br>";
                    }

                    if ($name == "Frann" && $year == 1994) {
                        echo "Sos el indicado!";
                    } elseif ($name == "Fran" && $year < 2000) {
                        echo "Podrías ser el indicado...";
                    } else {
                        echo "No sos el indicado...";
                    }
                    ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="p-3 m-2 bg-info text-white">
                    <h3>Operadores</h3> <br>
                    <?php
                    $num1 = 1;
                    $num2 = 1;
                    //$resultado = $num1 + $num2;

                    $num1++;
                    //$num2--;

                    echo "El resultado de la suma es: " . ($num1 + $num2) . "<br>";
                    echo "El resultado de la resta es: " . ($num1 - $num2) . "<br>";
                    echo "El resultado de la multiplicación es: " . ($num1 * $num2) . "<br>";
                    echo "El resultado de la division es: " . ($num1 / $num2) . "<br>";
                    echo "El resultado del modulo es: " . ($num1 % $num2) . "<br>";
                    ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="p-3 m-2 bg-primary text-white">
                    <h3>Variables y tipos de datos</h3> <br>
                    <?php
                    $name = "Frann";
                    $isOld = True;
                    $year = 1994;
                    $km = 64.5;
                    echo "Hola " . $name . ", naciste en el año " . $year . " y estas a " . $km . " kilómetros." . "<br>";
                    echo "La variable name es de tipo: " . gettype($name);
                    ?>
                </div>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>