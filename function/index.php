<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <?php

   /*
   Desarrollador: Jorge Quintero Suárez
   Programa de Formación: Desarrollo web en PHP
   Evidencia: Taller “Uso de funciones”
   */

   #en este punto hago el llamado al archivo en donde elaboro la funcion "operations"
   require_once './biblioteca.php';

   /*
    -El llamado de la funcion requiere que digite dos (2) números de su
    elección separados por coma (,) y posteriormente coloque una de las 
    primeras cuatro letras del abecedario español en minuscula y entre comillas (simples o dobles) para realizar una operación aritmetica :
   a = suma
   b = resta
   c = multiplicacion
   d = division
    -El resultado sera impreso en una un archivo php en tu navegador
    -En caso de que coloque cualquier letra o simbolo diferente a las letras 
    mecionadas el programa realizara una suma por defecto
    -En caso que de coloque el perador sin comillas el programa arrojara
    un erro
   */

   #Llamado de la funcion con sus parametros
   
   operations(801654120, 3514651, "a");
   ?>
</body>
</html>