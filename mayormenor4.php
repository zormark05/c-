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

				<label for="">Ingrese un número</label>
				<input class="valores" type="text" name="valor4">


				<input id="envio" type="submit" value="calcular" name="envio">

				<?php
				if (isset($_POST['envio'])) {

					$a = $_POST['valor1'];
					$b = $_POST['valor2'];
					$c = $_POST['valor3'];
					$d = $_POST['valor4'];
					
					if($a==$b and $b==$c and $c==$d) { // condiciones
						echo "todos son iguales \n".$a;	// muestra en pantalla
					}
					if($a==$b and $b==$c and $c>$d) { // condiciones
						echo "el primero, segundo y tercero son mayores \n" .$c; // muestra en pantalla
						echo  "\n el cuarto es el menor \n" .$d; // muestra en pantalla	
					}
					if($a==$b and $b==$c and $c<$d) { // condiciones
						echo "el cuarto es el mayor \n" .$d; // muestra en pantalla
						echo  "\n el primero, segundo y tercero son menores \n" .$c; // muestra en pantalla
					}
					if($a==$b and $b>$c and $c==$d) { // condiciones
						echo "el primero y segundo son iguales mayores \n" .$a; // muestra en pantalla
						echo  "\n el tercero y cuarto son iguales menores \n" .$c; // muestra en pantalla
					}
					if($a==$b and $b<$c and $c==$d){ // condiciones
						echo "el tercero y cuarto son mayores iguales \n" .$c; // muestra en pantalla
						echo  "\n el primero y segundo son menores iguales \n" .$a; // muestra en pantalla
					}
					if($a>$b and $b==$c and $c==$d){// condiciones
						echo "el primero es el mayor \n" .$a; // muestra en pantalla
						echo  "\n  el segundo, tercera y cuarta son menores iguales \n" .$b; // muestra en pantalla
					}
					if($a<$b and $b==$c and $c==$d){ // condiciones
						echo "el segundo, tercero y cuarto son mayores \n" .$b; // muestra en pantalla
						echo  "\n el primero es el menor \n" .$a; // muestra en pantalla
					}
					if($a>$b and $b>$c and $c==$d){ // condiciones
						echo "el primero es el mayor \n" .$a; // muestra en pantalla
						echo  "\n el segundo es \n" .$b; // muestra en pantalla
						echo  "\n tercero y cuarto son iguales menores \n" .$c; // muestra en pantalla
					}
					if($a==$b and $b>$c and $c>$d){ // condiciones
						echo "el primero y segundo son mayores iguales \n" .$a; // muestra en pantalla
						echo  "\n el intermedio es \n" .$c; // muestra en pantalla
						echo "el menor es \n" .$d; // muestra en pantalla
					}
					if($a==$b and $b<$c and $c<$d){ // condiciones
						echo "el cuarto es el mayor \n" .$d; // muestra en pantalla
						echo  "\n el segundo es \n" .$c; // muestra en pantalla
						echo  "\n el primero y segundo son menores iguales \n" .$a; // muestra en pantalla
					}
					if($a<$b and $b<$c and $c==$d){ // condiciones
						echo "el tercero y cuarto son mayores \n" .$c; // muestra en pantalla
						echo  "\n el segundo es \n" .$b; // muestra en pantalla
						echo  "\n el menor es  \n" .$a; // muestra en pantalla
					}
					if($a>$d and $d>$c and $c==$b){ // condiciones
						echo "el primero es el mayor \n" .$a; // muestra en pantalla
						echo  "\n el intermedio  es  \n" .$d; // muestra en pantalla
						echo  "\n el segundo y tercero son iguales menores \n" .$b;// muestra en pantalla
					}
					if($a<$b and $b==$c and $c<$d){ // condiciones
						echo "el cuarto es el mayor \n" .$d;// muestra en pantalla
						echo  "\n el segundo y tercero son iguales menores \n" .$b;// muestra en pantalla
						echo  "\n el menor es \n" .$a;// muestra en pantalla
					}
					if($a==$d and $d>$c and $c>$b){ // condiciones
						echo "el primero y cuarto son iguales mayores \n" .$a;// muestra en pantalla
						echo  "\n el intermedio es \n" .$c;// muestra en pantalla
						echo  "\n el menor es \n" .$b;// muestra en pantalla
					}
					if($c>$b and $b>$d and $d==$a) { // condiciones
						echo "el tercero es mayor \n" .$c;// muestra en pantalla
						echo  "\n el intermedio es \n" .$b; // muestra en pantalla
						echo  "\n el primero y el cuarto son menores iguales \n" .$d; // muestra en pantalla
					}
					if($a<$c and $c<$b and $b==$d) { // condiciones
						echo "el segundo y cuarto son mayores iguales \n" .$b; // muestra en pantalla
						echo  "\n el intermedio es \n" .$c; // muestra en pantalla
						echo  "\n el menor es \n" .$a; // muestra en pantalla
					}
					if($a==$c and $c>$b and $b==$d){ // condiciones
						echo "el primero y el tercero son mayores iguales \n" .$a;// muestra en pantalla
						echo  "\n el segundo y el cuarto son menores iguales \n" .$b; // muestra en pantalla
					}
					if($a==$c and $c<$b and $b==$d){
						echo "el segundo y cuarto son mayores iguales \n" .$b; // muestra en pantalla
						echo  "\n el primero y el tercero son menores iguales \n" .$a; // muestra en pantalla
					}
					if($a==$d and $d>$b and $b==$c){ // condiciones
						echo "el primero y cuarto son mayores \n" .$a; // muestra en pantalla
						echo  "\n el segundo y tercero son menores iguales \n" .$b; // muestra en pantalla
					}
					if($a==$d and $d<$b and $b==$c){ // condiciones
						echo  "\n el segundo y tercero son mayores iguales \n" .$b; // muestra en pantalla
						echo  "\n el primero y cuarto son menores iguales \n" .$a; // muestra en pantalla
					}
					if($a==$d and $d<$c and $c<$b){ // condiciones
						echo "el mayor es \n" .$b;
						echo  "\n el intermedio es \n" .$c; // muestra en pantalla
							echo  "\n el primero y el cuarto son menores iguales \n" .$a; // muestra en pantalla
					}
					if ($a==$b and $b<$d and $d<$c){ // condiciones
						echo "el tercero es el mayor  \n" .$c; // muestra en pantalla
						echo  "\n el intermedio es \n" .$d; // muestra en pantalla
						echo  "\n el primero y segundo son menores iguales \n" .$a; // muestra en pantalla
					}
					if($a==$b and $b>$d and $d>$c){ // condiciones
						echo "el primero y el segundo son mayores \n" .$a; // muestra en pantalla
						echo  "\n el intermedio es \n" .$d; // muestra en pantalla
						echo  "\n el menor es  \n" .$c; // muestra en pantalla
					}
					if($a==$b and $b==$d and $d<$c){ // condiciones
						echo "el mayor es  \n" .$c; // muestra en pantalla
						echo  "\n el primero, segundo y cuarto son iguales menores \n" .$a; // muestra en pantalla
					}
					if($a==$b and $b==$d and $d>$c){ // condiciones
						echo "el primero, segundo y cuarto son mayores iguales \n" .$a; // muestra en pantalla
						echo  "\n el menor es \n" .$c; // muestra en pantalla
					}
					if($a==$c and $c==$d and $d<$b){ // condiciones
						echo "el mayor es \n" .$b; // muestra en pantalla
						echo  "\n el primero, tercero y cuarto son iguales menores \n" .$a; // muestra en pantalla
					}
					if($a==$c and $c==$d and $d>$b){ // condiciones
						echo "el primero, tercero y cuarto son mayores \n" .$a; // muestra en pantalla
						echo  "\n el menor es \n" .$b; // muestra en pantalla
					}
					if($c>$a and $a>$b and $b==$d){ // condiciones
						echo "el tercero es mayor \n" .$c; // muestra en pantalla
						echo  "\n el intermedio es  \n" .$a; // muestra en pantalla
						echo  "\n el segundo y tercero son iguales \n" .$b;// muestra en pantalla
					}
					if($b==$d and $d>$a and $a>$c){ // condiciones
						echo "el segundo y cuarto son mayores iguales \n" .$b; // muestra en pantalla
						echo  "\n el intermedio es \n" .$a; // muestra en pantalla
						echo  "\n el menor es \n" .$c; // muestra en pantalla
					}
					if($b>$a and $a==$d and $d>$c){ // condiciones
						echo "el mayor  \n" .$b; // muestra en pantalla
						echo  "\n el primero y el cuarto son iguales menores \n" .$a; // muestra en pantalla
						echo  "\n el menor es \n" .$c; // muestra en pantalla
					}
					if($a>$c and $c>$b and $b==$d){ // condiciones
						echo "el mayor es \n" .$a; // muestra en pantalla
						echo  "\n el intermedio es \n" .$c; // muestra en pantalla
						echo  "\n el segundo y cuarto son menores iguales \n" .$b; // muestra en pantalla
					}
					if($a==$d and $d>$b and $b>$c){ // condiciones
						echo "el primero y cuarto son mayores \n" .$a; // muestra en pantalla
						echo  "\n el intermedio es \n" .$b; // muestra en pantalla
						echo  "\n el menor es \n" .$c;	// muestra en pantalla
					}
					if($b>$a and $a==$c and $c>$d){ // condiciones
						echo "el mayor  \n" .$b; // muestra en pantalla
						echo  "\n el primero y el tercero son iguales menores \n" .$a; // muestra en pantalla
						echo  "\n el menor es \n" .$d; // muestra en pantalla
					}
					if($a==$c and $c>$d and $d>$b){ // condiciones
						echo "el primero y tercero son mayores \n" .$a; // muestra en pantalla
						echo  "\n el intermedio es \n" .$d; // muestra en pantalla
						echo  "\n el menor es \n" .$b;	// muestra en pantalla
					}
					if($a==$c and $c>$b and $b>$d){ // condiciones
						echo "el primero y tercero son mayores \n" .$a; // muestra en pantalla
						echo  "\n el intermedio es \n" .$b; // muestra en pantalla
						echo  "\n el menor es \n" .$d;	// muestra en pantalla
					}
					if($d==$c and $c>$a and $a>$b){ // condiciones
						echo "el tercero y cuarto son mayores \n" .$c;// muestra en pantalla
						echo  "\n el intermedio es \n" .$a; // muestra en pantalla
						echo  "\n el menor es \n" .$b; // muestra en pantalla
					}
					if($d>$b and $b>$a and $a==$c){ // condiciones
						echo  "\n el mayor es \n" .$d; // muestra en pantalla
						echo  "\n el intermedio es \n" .$b; // muestra en pantalla
						echo  "\n el primero y tercero son menores \n" .$a; // muestra en pantalla
					}
					if($b>$d and $d>$a and $a==$c){ // condiciones
						echo  "\n el mayor es \n" .$b; // muestra en pantalla
						echo  "\n el intermedio es \n" .$d; // muestra en pantalla
						echo  "\n el primero y tercero son menores \n" .$a; // muestra en pantalla
					}
					if($b>$a and $a>$c and $c==$d){ // condiciones
						echo  "\n el mayor es \n" .$b; // muestra en pantalla
						echo  "\n el intermedio es \n" .$a; // muestra en pantalla
						echo  "\n el primero y tercero son menores \n" .$c; // muestra en pantalla
					}
					if($c>$a and $a==$b and $b>$d){
						echo  "\n el mayor es \n" .$c; // muestra en pantalla
						echo  "\n el primero y segundo son menores iguales \n" .$a; // muestra en pantalla
						echo  "\n el menor es \n" .$d; // muestra en pantalla
					}
					if($d>$a and $a==$b and $b>$c){
						echo  "\n el mayor es \n" .$d; // muestra en pantalla
						echo  "\n el primero y segundo son menores iguales \n" .$a; // muestra en pantalla
						echo  "\n el menor es \n" .$c; // muestra en pantalla
					}
					if($d>$a and $a==$c and $c>$b){
						echo  "\n el mayor es \n" .$d; // muestra en pantalla
						echo  "\n el primero y tercero son menores iguales \n" .$a; // muestra en pantalla
						echo  "\n el menor es \n" .$b; // muestra en pantalla
					}
					if($a>$c and $c==$d and $d>$b){
						echo  "\n el mayor es \n" .$a; // muestra en pantalla
						echo  "\n el primero y tercero son menores iguales \n" .$c; // muestra en pantalla
						echo  "\n el menor es \n" .$b; // muestra en pantalla
					} 
					if($b>$c and $c>$a and $a>$d){
						echo "el primero es el mayor  \n" .$b; // muestra en pantalla
						echo  "\n el segundo es \n" .$c; // muestra en pantalla
						echo  "\n el tercero es  \n" .$a; // muestra en pantalla
						echo  "\n el menor es \n" .$d;  // muestra en pantalla
					}
					if($d>$c and $c>$a and $a>$b){
						echo "el primero es el mayor  \n" .$d; // muestra en pantalla
						echo  "\n el segundo es \n" .$c; // muestra en pantalla
						echo  "\n el tercero es  \n" .$a; // muestra en pantalla
						echo  "\n el menor es \n" .$b;  // muestra en pantalla	
					}
					if($c>$b and $b>$a and $a>$d){
						echo "el primero es el mayor  \n" .$c; // muestra en pantalla
						echo  "\n el segundo es \n" .$b; // muestra en pantalla
						echo  "\n el tercero es  \n" .$a; // muestra en pantalla
						echo  "\n el menor es \n" .$d;  // muestra en pantalla	
					}
					if($a>$b and $b>$c and $c>$d){ // condiciones
						echo "el primero es el mayor  \n" .$a; // muestra en pantalla
						echo  "\n el segundo es \n" .$b; // muestra en pantalla
						echo  "\n el tercero es  \n" .$c; // muestra en pantalla
						echo  "\n el menor es \n" .$d;  // muestra en pantalla
					}
					if($a<$b and $b<$c and $c<$d){ // condiciones
						echo "el primero es el mayor  \n" .$d; // muestra en pantalla
						echo  "\n el segundo es \n" .$c; // muestra en pantalla
						echo  "\n el tercero es  \n" .$b; // muestra en pantalla
						echo  "\n el menor es \n" .$a;  // muestra en pantalla
					}
					if($a>$b and $b>$d and $d>$c){ // condiciones
						echo "el mayor es \n" .$a; // muestra en pantalla
						echo  "\n el segundo es \n" .$b; // muestra en pantalla
						echo  "\n el tercero es \n" .$d; // muestra en pantalla
						echo  "\n el menor es \n" .$c; // muestra en pantalla
					}
					if($a>$c and $c>$d and $d>$b){ // condiciones
						echo "el mayor es \n" .$a; // muestra en pantalla
						echo  "\n el segundo es \n" .$c; // muestra en pantalla
						echo  "\n el tercero es \n" .$d; // muestra en pantalla
						echo  "\n el menor es \n" .$b; // muestra en pantalla
					}
					if($b>$c and $c>$d and $d>$a){ // condiciones
						echo "el mayor es \n" .$b; // muestra en pantalla
						echo  "\n el segundo es \n" .$c; // muestra en pantalla
						echo  "\n el tercero es \n" .$d; // muestra en pantalla
						echo  "\n el menor es \n" .$a; // muestra en pantalla
					}
					if($a>$d and $d>$c and $c>$b){ // condiciones
						echo "el mayor es \n" .$a; // muestra en pantalla
						echo  "\n el segundo es \n" .$d; // muestra en pantalla
						echo  "\n el tercero es \n" .$c; // muestra en pantalla
						echo  "\n el menor es \n" .$b; // muestra en pantalla
					}
					if($c>$a and $a>$d and $d>$b){ // condiciones
						echo "el mayor es \n" .$c; // muestra en pantalla
						echo  "\n el segundo es \n" .$a; // muestra en pantalla
						echo  "\n el tercero es \n" .$d; // muestra en pantalla
						echo  "\n el menor es \n" .$b; // muestra en pantalla
					}
					if($c>$d and $d>$a and $a>$b){ // condiciones
						echo "el mayor es \n" .$c; // muestra en pantalla
						echo  "\n el segundo es \n" .$d; // muestra en pantalla
						echo  "\n el tercero es \n" .$a; // muestra en pantalla
						echo  "\n el menor es \n" .$b; // muestra en pantalla
					}
					if($c>$a and $a>$b and $b>$d){ // condiciones
						echo "el mayor es \n" .$c; // muestra en pantalla
						echo  "\n el segundo es \n" .$a; // muestra en pantalla
						echo  "\n el tercero es \n" .$b; // muestra en pantalla
						echo  "\n el menor es \n" .$d; // muestra en pantalla
					}
					if($c>$b and $b>$d and $d>$a){ // condiciones
						echo "el mayor es \n" .$c; // muestra en pantalla
						echo  "\n el segundo es \n" .$b; // muestra en pantalla
						echo  "\n el tercero es \n" .$d; // muestra en pantalla
						echo  "\n el menor es \n" .$a; // muestra en pantalla
					}
					if($c>$d and $d>$b and $b>$a){ // condiciones
						echo "el mayor es \n" .$c; // muestra en pantalla
						echo  "\n el segundo es \n" .$d; // muestra en pantalla
						echo  "\n el tercero es \n" .$b; // muestra en pantalla
						echo  "\n el menor es \n" .$a; // muestra en pantalla
					}
					if($d>$a and $a>$b and $b>$c){ // condiciones
						echo "el mayor es \n" .$d; // muestra en pantalla
						echo  "\n el segundo es \n" .$a; // muestra en pantalla
						echo  "\n el tercero es \n" .$b; // muestra en pantalla
						echo  "\n el menor es \n" .$c; // muestra en pantalla
					}
					if($a>$c and $c>$b and $b>$d){ // condiciones
						echo "el mayor es \n" .$a; // muestra en pantalla
						echo  "\n el segundo es \n" .$c; // muestra en pantalla
						echo  "\n el tercero es \n" .$b; // muestra en pantalla
						echo  "\n el menor es \n" .$d; // muestra en pantalla
					}
					if($d>$a and $a>$c and $c>$b){ // condiciones
						echo "el mayor es \n" .$d; // muestra en pantalla
						echo  "\n el segundo es \n" .$a; // muestra en pantalla
						echo  "\n el tercero es \n" .$c; // muestra en pantalla
						echo  "\n el menor es \n" .$b; // muestra en pantalla
					}
					if($b>$d and $d>$a and $a>$c){ // condiciones
						echo "el mayor es \n" .$b; // muestra en pantalla
						echo  "\n el segundo es \n" .$d; // muestra en pantalla
						echo  "\n el tercero es \n" .$a; // muestra en pantalla
						echo  "\n el menor es \n" .$c; // muestra en pantalla
					}
					if($d>$b and $b>$c and $c>$a){ // condiciones
						echo "el mayor es \n" .$d; // muestra en pantalla
						echo  "\n el segundo es \n" .$b; // muestra en pantalla
						echo  "\n el tercero es \n" .$c; // muestra en pantalla
						echo  "\n el menor es \n" .$a; // muestra en pantalla
					}
					if($b>$a and $a>$d and $d>$c){
						echo "el mayor es \n" .$b; // muestra en pantalla
						echo  "\n el segundo es \n" .$a; // muestra en pantalla
						echo  "\n el tercero es \n" .$d; // muestra en pantalla
						echo  "\n el menor es \n" .$c; // muestra en pantalla
					}
					if($a>$d and $d>$b and $b>$c){
						echo "el mayor es \n" .$a; // muestra en pantalla
						echo  "\n el segundo es \n" .$d; // muestra en pantalla
						echo  "\n el tercero es \n" .$b; // muestra en pantalla
						echo  "\n el menor es \n" .$c; // muestra en pantalla
					}
					if($d>$b and $b>$a and $a>$c){
						echo "el mayor es \n" .$d; // muestra en pantalla
						echo  "\n el segundo es \n" .$b; // muestra en pantalla
						echo  "\n el tercero es \n" .$a; // muestra en pantalla
						echo  "\n el menor es \n" .$c; // muestra en pantalla
					}
					if($b>$a and $a>$c and $c>$d){
						echo "el mayor es \n" .$d; // muestra en pantalla
						echo  "\n el segundo es \n" .$b; // muestra en pantalla
						echo  "\n el tercero es \n" .$a; // muestra en pantalla
						echo  "\n el menor es \n" .$c; // muestra en pantalla
				}
					
				
				}
				?>

			</form>


		</article>
	</main>
</body>

</html>