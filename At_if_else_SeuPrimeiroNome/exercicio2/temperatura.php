<?php
$temp = $_GET["temp"];
 
if ($temp < 0) {
    $mensagem = "Congelante";
} elseif ($temp < 15) {
    $mensagem = "Muito frio";
} elseif ($temp < 25) {
    $mensagem = "Razoável";
} else {
    $mensagem = "Calor";
}
 
echo "<h2>Temperatura: {$temp} °C</h2>";
echo "<p>Mensagem: <strong>{$mensagem}</strong></p>";
?>