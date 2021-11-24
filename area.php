<?php

//imprimir datos de las funciones

echo "el area del cuadrado es ",cuadrado(6)."<br>";
echo "el area del triangulo es ".triangulo(7, 3)."<br>";
echo "el area del circulo es ".circulo(8)."<br>";


//definimos las funciones
function cuadrado($lado){
 $area = $lado*$lado; 
 return $area;
}

function triangulo($base, $altura){
 $area = ($base*$altura)/2; 
 return $area;
}

function circulo($radio){
 $area = (3.1416*($radio*$radio))/2; 
 return $area;
}
?>
