<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="../c++/assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma de números</title>
</head>

<body>
    <header>
        <ul>
            <a href="index.php">
                <li>
                    <div class="adso">
                        <div>
                            <p id="adso">ADSO</p>
                            <p id="hub">hub</p>
                        </div>
                        <p id="comuni">community</p>
                    </div>
                </li>
            </a>

            <a href="#">
                <li>
                    Nicolás Caicedo
                </li>
            </a>
            <a href="acercade.php">Acerca de Nosotros</a>

        </ul>

    </header>

    <main>

        <nav>
            <ul><a class="non" href="oper.php">
                    <li>Suma dos números</li>
                </a>
                <a class="non" href="km a millas.php">
                    <li>Km a millas</li>
                </a>
                <a class="non" href="mayor_menor.php">
                    <li>Mayor menor 2</li>
                </a>
                <a class="non" href="mayor_menor3.php">
                    <li>Mayor menor 3</li>
                </a>
                <a class="non" href="factoriales.php">
                    <li>Factoriales</li>
                </a>
                <a class="non" href="Ecuaciones.php">
                    <li>Ecuaciones</li>
                </a>
                <a class="non" href="calcuarcifras.php">
                    <li>Calculadora cifras</li>
                </a>

                <a class="non" href="mayormenor4.php">
                    <li>Mayor menor 4</li>
                </a>
                <a class="non" href="suma de numeros enteros.php">
                    <li>Suma de números</li>
                </a>
                <a class="non" href="indice de barach.php">
                    <li>Índice de barach</li>
                </a>
                <a class="non" href="grados celsius a fahrenheit.php">
                    <li>Conversor temperaturas</li>
                </a>
                <a class="non" href="conversor.php">
                    <li>Conversor</li>
                </a>
                <a class="non" href="binario2.php">
                    <li>Binario</li>
                </a>
                <a class="non" href="ecuacion fraccionario.php">
                    <li>Ecuaciones fraccionaria</li>
                </a>


            </ul>


        </nav>

        <article class="contenedor">

            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
                <h1>Calcular valores con operaciones básicas</h1>
                <label for="">Ingrese un número</label>
                <input class="valores" type="text" name="valor1">

                <label for="">Ingrese un número</label>
                <input class="valores" type="text" name="valor2">
                <label for="">Ingrese un número</label>
                <input class="valores" type="text" name="valor3">

                <label for="">Ingrese un número</label>
                <input class="valores" type="text" name="valor4">

                <label for="">Ingrese un número</label>
                <input class="valores" type="text" name="valor5">

                <label for="">Ingrese un número</label>
                <input class="valores" type="text" name="valor6">

                <input id="envio" type="submit" value="calcular" name="envio">

                <?php
                if (isset($_POST['envio'])) {

                    $a = $_POST['valor1'];
                    $b = $_POST['valor2'];
                    $c = $_POST['valor3'];
                    $d = $_POST['valor4'];
                    $e = $_POST['valor5'];
                    $f = $_POST['valor6'];




                    echo "<br>";

                    $s1 = $a + $b;
                    $s2 = $c + $b;
                    $s3 = $e + $f;

                    echo "La suma del primer y segundo numero es= $s1" . "<br>";
                    echo "La suma del tercer y cuarto numero es= $s2" . "<br>";
                    echo "La suma del cuarto y quinto numero es= $s3" . "<br>";

                    if ($s1 == $s2 and $s2 == $s3) { //condicional
                        echo "TODOS SON  IGUALES :VV" . "<br>"; //mostrar en pantalla
                    }
                    //iguales menores
                    if ($s1 == $s2 and $s3 < $s1) { //condicional
                        echo "El menor es: $s3"; //mostrar en pantalla
                        echo "El primer y el segundo  RESULTADOson iguales y tambien son mayores" . "<br>"; //mostrar en pantalla
                        echo "No hay intermedios" . "<br>"; //mostrar en pantalla
                    }
                    if ($s1 == $s3 and $s2 < $s1) { //condicion
                        echo "El menor es:  $s2"; //mostrar en pantalla
                        echo "El primer y el tercer RESULTADO son iguales y tambien son mayores" . "<br>"; //mostrar en pantalla
                        echo "No hay intermedios" . "<br>"; //mostrar en pantalla
                    }
                    if ($s1 < $s2 and $s2 == $s3) { //condicion
                        echo "El menor es: $s1 "; //mostrar en pantalla
                        echo "El Segundo y el tercer RESULTADO son iguales y tambien son mayores" . "<br>"; //mostrar en pantalla
                        echo "No hay intermedios" . "<br>"; //mostrar en pantalla
                    }

                    //iguales mayores
                    if ($s1 == $s2 and $s3 > $s1) { //condicional
                        echo "El mayor es:   $s3"; //mostrar en pantalla
                        echo "El primer y el segundo RESULTADO son iguales y son menores" . "<br>"; //mostrar en pantalla
                        echo "No hay intermedios" . "<br>"; //mostrar en pantalla
                    }
                    if ($s1 == $s3 and $s2 > $s1) { //condicional
                        echo "El mayor  es:  $s3"; //mostrar en pantalla
                        echo "El primer y el tercer RESULTADO  son iguales\n y son menores" . "<br>"; //mostrar en pantalla
                        echo "No hay intermedios" . "<br>"; //mostrar en pantalla
                
                    }
                    if ($s1 > $s2 and $s2 == $s3) { //condicional
                        echo "El mayor es: $s1 " . "<br>"; //mostrar en pantalla
                        echo "El Segundo y el tercer RESULTADO son iguales y son menores" . "<br>"; //mostrar en pantalla
                        echo "No hay intermedios" . "<br>"; //mostrar en pantalla
                    }
                    echo "<br>";
                    //opciones menores
                    if ($s1 < $s2 and $s1 < $s3) { //condicional
                        echo "El menor es:$s1 " . "<br>"; //mostrar en pantalla
                    } else if ($s2 < $s1 and $s2 < $s3) { //condicional
                        echo "El menor es: $s2" . "<br>"; //mostrar en pantalla
                    } else if ($s3 < $s1 and $s3 < $s2) { //condicional
                        echo "El menor es: $s3" . "<br>"; //mostrar en pantalla
                    }

                    //variables intermedias
                    if ($s1 > $s2 and $s2 < $s3 and $s3 > $s1) { //condicional
                        echo "El intermedio es: $s1 " . "<br>"; //mostrar en pantalla
                    }
                    if ($s1 > $s2 and $s2 < $s3 and $s3 < $s1) { //condicional
                        echo "El intermedio es: $s3 " . "<br>"; //mostrar en pantalla
                    }
                    if ($s1 < $s2 and $s2 > $s3 and $s3 < $s1) { //condicional
                        echo "El intermedio es:$s1  " . "<br>"; //mostrar en pantalla
                    }
                    if ($s1 < $s2 and $s2 < $s3 and $s3 > $s1) { //condicional
                        echo "El intermedio es: $s2 " . "<br>"; //mostrar en pantalla
                    }
                    if ($s1 > $s2 and $s2 > $s3 and $s3 < $s1) { //condicional
                        echo "El intermedio es:  $s2" . "<br>"; //mostrar en pantalla
                    }
                    if ($s1 > $s2 and $s2 < $s3 and $s3 > $s1) { //condicional
                        echo "El intermedio es: $s1 " . "<br>"; //mostrar en pantalla
                    }
                    if ($s1 < $s2 and $s2 > $s3 and $s3 > $s1) { //condicional
                        echo "El intermedio es: $s3 " . "<br>"; //mostrar en pantalla
                    }

                    //opciones mayores
                    if ($s1 > $s2 and $s1 > $s3) { //condicional
                        echo "EL mayor es:  $s1 " . "<br>"; //mostrar en pantalla
                    } else if ($s2 > $s1 and $s2 > $s3) { //condicional
                        echo "EL mayor es: $s2" . "<br>"; //mostrar en pantalla
                    } else if ($s3 > $s1 and $s3 > $s2) { //condicional
                        echo "EL mayor es:  $s3" . "<br>"; //mostrar en pantalla
                    }
                }
                ?>

            </form>


        </article>
    </main>
</body>

</html>