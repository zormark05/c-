<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="../c++/assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú</title>
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
                <h1>Conversor de temperaturas</h1>
                <label for="">Ingrese celsius</label>
                <input class="valores" type="text" name="valor1">

                <label for="">Ingrese fahrenheit</label>
                <input class="valores" type="text" name="valor2">



                <input id="envio" type="submit" value="calcular" name="envio">

                <?php
                if (isset($_POST['envio'])) {

                    $c = $_POST['valor1'];
                    $f = $_POST['valor2'];

                    $rc = $c * 1.8 + 32;
                    $rf = ($f - 32) / 1.8;

                    echo "<br>";

                    echo "El resultado de C° a F° es: °{$rc}";

                    echo "<br>";

                    echo "El resultado de F° a C° es: °{$rf}";

                    echo "<br>";

                }
                ?>

            </form>


        </article>
    </main>
</body>

</html>