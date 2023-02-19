<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="../c++/assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indice de barach</title>
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
                <h1>Índice de barach</h1>
                <label for="">Ingrese un número</label>
                <input class="valores" type="text" name="valor1">

                <label for="">Ingrese un número</label>
                <input class="valores" type="text" name="valor2">

                <label for="">Ingrese un número</label>
                <input class="valores" type="text" name="valor3">



                <input id="envio" type="submit" value="calcular" name="envio">

                <?php
                if (isset($_POST['envio'])) {

                    $fc = $_POST['valor1'];
                    $ts = $_POST['valor2'];
                    $td = $_POST['valor3'];

                    $ib = $fc * ($ts + $td) / 100;
                    echo "su tension arterial segun IB es: $ib" . "<br>";

                    if ($ib < 110) //condicional
                    {
                        echo "Usted presenta HIPERTENSION" . "<br>"; //mostrar en pantalla
                    } else if ($ib > 110 and $ib < 170) //condicional
                    {
                        echo "Su hipertension es normal" . "<br>"; //mostrar en pantalla
                    } else if ($ib >= 171 and $ib <= 200) //condicional
                    {
                        echo "Usted presenta TENDECIA A HIPERTENSION" . "<br>"; //mostrar en pantalla
                    } else if ($ib > 200) //condicional
                    {
                        echo "Usted presenta HIPERTENSO" . "<br>"; //mostrar en pantalla
                    }

                }
                ?>

            </form>


        </article>
    </main>
</body>

</html>