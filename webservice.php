<?php

//DNI- RUC

$tipo = $_POST['tipo']; /* dni - ruc */
$documento = $_POST['documento'];
$token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJlbWFpbCI6Imx1cXVlam9oYW4xOTRAZ21haWwuY29tIn0.AVIiijfUH1jstHgez3akgG4Pme1kZaViSVQF-no_puw';

// Variable que almacena ruta (no realiza la consulta)
$url = "https://dniruc.apisperu.com/api/v1/{$tipo}/{$documento}?token={$token}";

//Accede URL y obtener los datos
$resultado = file_get_contents($url);
echo $resultado /* Ya devuelve el restultado en json por el web service */


?>