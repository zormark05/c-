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
				<h1>Calcular el mayor y menor</h1>
				<label for="">Ingrese un número</label>
				<input class="valores" type="text" name="valor1">

				<label for="">Ingrese un número</label>
				<input class="valores" type="text" name="valor2">

				<label for="">Ingrese un número</label>
				<input class="valores" type="text" name="valor3">


				<input id="envio" type="submit" value="calcular" name="envio">

				<?php
				if (isset($_POST['envio'])) {

					$num1 = $_POST['valor1'];
					$num2 = $_POST['valor2'];
					$num3 = $_POST['valor3'];

					if ($num1 == $num2 and $num2 == $num3) {
						echo "\n estos valores son iguales, numeros iguales con este valor: \n\n\t" . $num2;
					} else if ($num1 == $num2 and $num2 > $num3) {
						echo "\n este valor es mayor, dos numeros iguales con este valor: \n\n\t" . $num1;
						echo "\n este numero es menor: \n\n\t" . $num3;
					} else if ($num1 > $num2 and $num2 == $num3) {
						echo "\n este numero es mayor: \n\n\t" . $num1;
						echo "\n este valor es menor, dos numeros iguales con este valor: \n\n\t" . $num2;
					} else if ($num1 < $num2 and $num2 == $num3) {
						echo "\n este valor es mayor, dos numeros iguales con este valor: \n\n\t" . $num2;
						echo "\n este numero es menor: \n\n\t" . $num1; //seccion quue se encarga de localizar y generar un mensaje
					} // a las variables de igual valor 
					else if ($num1 == $num2 and $num2 < $num3) {
						echo "\n este numero es mayor: \n\n\t" . $num3;
						echo "\n este valor es menor, dos numeros iguales con este valor: \n\n\t" . $num2;
					} else if ($num1 == $num3 and $num2 > $num3) {
						echo "\n este numero es mayor: \n\n\t" . $num2;
						echo "\n este valor es menor, dos numeros iguales con este valor: \n\n\t" . $num3;
					} else if ($num1 == $num3 and $num2 < $num3) {
						echo "\n este valor es mayor, dos numeros iguales con este valor: \n\n\t" . $num3;
						echo "\n este numero es menor: \n\n\t" . $num2;
					} else if ($num1 > $num2 and $num2 > $num3 and $num3 < $num2) {
						echo "\n este numero es mayor: \n\n\t" . $num1;
						echo "\n este numero es el intermedio: \n\n\t" . $num2; // seccion que se encarga de determinar los valores 
						echo "\n este numero es el menor: \n\n\t" . $num3; //y orgaizarlos de mayor a menor,con un if y comparando los valores 
						//con todas las posibilidades para las variables que no son de igual valor 
					} else if ($num1 < $num2 and $num2 < $num3 and $num3 > $num2) {
						echo "\n este numero es mayor: \n\n\t" . $num3;
						echo "\n este numero es el intermedio: \n\n\t" . $num2;
						echo "\n este numero es el menor: \n\n\t" . $num1;

					} else if ($num2 > $num1 and $num1 > $num3 and $num3 < $num1) {
						echo "\n este numero es mayor: \n\n\t" . $num2;
						echo "\n este numero es el intermedio: \n\n\t" . $num1;
						echo "\n este numero es el menor: \n\n\t" . $num3;

					} else if ($num1 > $num3 and $num2 > $num3 and $num3 < $num2) {
						echo "\n este numero es mayor: \n\n\t" . $num1;
						echo "\n este numero es el intermedio: \n\n\t" . $num3;
						echo "\n este numero es el menor: \n\n\t" . $num2;

					} else if ($num2 > $num3 and $num3 > $num1 and $num1 < $num3) {
						echo "\n este numero es mayor: \n\n\t" . $num2;
						echo "\n este numero es el intermedio: \n\n\t" . $num3;
						echo "\n este numero es el menor: \n\n\t" . $num1;

					} else if ($num2 > $num1 and $num1 > $num3 and $num3 < $num1) {
						echo "\n este numero es mayor: \n\n\t" . $num2;
						echo "\n este numero es el intermedio: \n\n\t" . $num1;
						echo "\n este numero es el menor: \n\n\t" . $num3;

					} else if ($num3 > $num1 and $num1 > $num2 and $num2 < $num1) {
						echo "\n este numero es mayor: \n\n\t" . $num3;
						echo "\n este numero es el intermedio: \n\n\t" . $num1;
						echo "\n este numero es el menor: \n\n\t" . $num2;


					}



				}
				?>

			</form>


		</article>
	</main>
</body>

</html>