<?php
$peso = $_POST['peso'];
$altura = $_POST['altura'];

$imc = $peso / ($altura * $altura);


if ($imc < 18.5) {
    $mensagem  = "Abaixo do peso! ";

} elseif ($imc >= 18.5 && $imc <= 24.9 ) {
    $mensagem  = "Peso Normal! ";

} elseif ($imc >= 25.0 && $imc <= 29.9 ){ 
    $mensagem  = "Sobre Peso! ";

}elseif ($imc >= 30.0 && $imc <= 34.9 ) {
    $mensagem  = "Obessidade I! ";

}   elseif ($imc >= 35.0 && $imc <= 39.9 ) {
    $mensagem  = "Obessidade II! ";

}   elseif ($imc >= 40.0 ) {
    $mensagem  = "Obessidade II! ";
}
 ?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Resultado IMC</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(to right, #f12711, #f5af19);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      color: #fff;
    }

    .card {
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(12px);
      padding: 30px 40px;
      border-radius: 16px;
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
      width: 300px;
      text-align: center;
    }

    h1 {
      font-size: 22px;
      margin-bottom: 15px;
    }

    p {
      font-size: 18px;
      font-weight: bold;
    }

    a {
      display: inline-block;
      margin-top: 20px;
      background: #fff;
      color: #f12711;
      padding: 10px 20px;
      border-radius: 8px;
      text-decoration: none;
      font-weight: bold;
      transition: 0.3s;
    }

    a:hover {
      background: #f5f5f5;
    }
  </style>
</head>
<body>
  <div class="card">
    <h1>Resultado do IMC</h1>
    <p>Seu IMC é: <?php echo number_format($imc, 2); ?></p>
    <p>Classificação: <?php echo $mensagem; ?></p>
    <a href="exercicio03.html">⏪ Voltar</a>
  </div>
</body>
</html>