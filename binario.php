<?php 

// int exp,digito; // variables 
// 		    double binario, decimal; // variables 
// 			char oper; // Variable ingresada por teclado 
		
			
// 			cout<<"QUE QUIERES CONVERTIR \n\na:Binario a decimal  \nb:Decimal a binario\n"<<endl; // MUESTRA EN PANTALLA
// 			cin>>oper; // accion de la variable ingresada por teclado
// 			switch(oper){ //submenu
			
// 			case'a': //primera opcion
// 				cout<<"ha seleccionado binario a decimal"<<endl; // MUESTRA EN PANTALLA
				
$binario = 101;
		
		//    cout << "Introduce numero: "; // MUESTRA EN PANTALLA
		//    cin >> binario; // accion de la variable ingresada por teclado
		   $exp=0; // variable
		   $decimal=10; // variable
		   while(($binario/10)!=0) // condicion
		   {
		           $digito = $binario % 10; // operacion
		           $decimal = $decimal + $digito * pow(2.0,$exp); // operacion
		           $exp++; // operacion
		           $binario=(int)($binario/10); // operacion
		   }
		   $decimal = $decimal + $binario * pow(2.0,$exp); // operacion
		   echo "Decimal: ". $decimal ; // MUESTRA EN PANTALLA
		  
		//     cout<<"ha seleccionado decimal a binario"<<endl; // MUESTRA EN PANTALLA
		//     	{
		//      $bin[99999]; //variables
		//       $i = 0; //contenedor del while
                    
		//     scanf("%i", &$n); //
			
		//     while ($n != 0)
		//     {
		//           bindec(i) = $n % 2;
		//           $n = $n / 2;
		//           $i++;
		//     }
		    
		//     $i--;
		    
		//    echo "Binario: "; 
		
		//     while ($i>=0)
		//     {
		//           printf("%i", $bin[i]);
		//           $i--;
		//     }
        //     }


?>