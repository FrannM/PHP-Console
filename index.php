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

        <div class="row">
            <div class="col-12">
                <div class="p-3 m-2 bg-dark text-white">
                    <h3>Clase: Condicional SWITCH</h3> <br>
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
                    <h3>Clase: Condicional IF</h3> <br>
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
                    <h3>Clase: Operadores</h3> <br>
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
                    <h3>Clase: Variables y tipos de datos</h3> <br>
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