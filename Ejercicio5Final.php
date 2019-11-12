<?php



$array = array("empty()", "include", "	instanceof", "function","isset()");
 
//saco el numero de elementos
$longitud = count($array);
 
echo "<h3>Lista de 5 palabras reservadas en PHP</h3>"."<br>";

//Recorro todos los elementos
for($i=0; $i<$longitud; $i++)
      {
      //saco el valor de cada elemento
	  echo $array[$i];
	  echo "<br>";
      }


 


 ?> 