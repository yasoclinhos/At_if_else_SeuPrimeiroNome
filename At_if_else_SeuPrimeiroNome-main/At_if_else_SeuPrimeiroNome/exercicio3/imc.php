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
    $mensagem  = "Obessidade III! ";
}
 ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Resultado IMC</title>
  <style>
    
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Verdana, sans-serif;
      background: linear-gradient(to right, #1f0f27, #60316c, #c467cd);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      color: #fff;
      padding: 20px;
    }

    .card {
      background: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(15px);
      padding: 40px 50px;
      border-radius: 20px;
      box-shadow: 0 12px 40px rgba(000, 00, 0, 0.3);
      width: 350px;
      max-width: 90vw;
      text-align: center;
      transition: transform 0.3s ease;
    }

    .card:hover {
      transform: translateY(-8px);
      box-shadow: 0 18px 50px rgba(255, 255, 255, 0.15);
    }

    h1 {
      font-size: 26px;
      margin-bottom: 30px;
      letter-spacing: 1.2px;
      text-shadow: 0 1px 4px rgba(0,0,0,0.2);
    }

    p {
      font-size: 20px;
      font-weight: 600;
      margin-bottom: 25px;
      line-height: 1.4;
      text-shadow: 0 1px 3px rgba(0,0,0,0.15);
    }

    a {
      display: inline-block;
      margin-top: 30px;
      background: #fff;
      color: #f12711;
      padding: 14px 28px;
      border-radius: 12px;
      text-decoration: none;
      font-weight: 700;
      font-size: 18px;
      box-shadow: 0 4px 12px rgba(241, 39, 17, 0.3);
      transition: background-color 0.3s ease, box-shadow 0.3s ease;
    }

    a:hover {
      background-color: #f5f5f5;
      box-shadow: 0 6px 16px rgba(241, 39, 17, 0.5);
    }

    
    @media (max-width: 400px) {
      .card {
        padding: 30px 25px;
        width: 100%;
      }

      h1 {
        font-size: 22px;
        margin-bottom: 20px;
      }

      p {
        font-size: 18px;
        margin-bottom: 20px;
      }

      a {
        font-size: 16px;
        padding: 12px 24px;
      }
    }
  </style>
</head>
<body>
  <div class="card">
    <h1>Resultado do IMC</h1>
    <p>Seu IMC é: <?php echo number_format($imc, 2); ?></p>
    <p>Classificação: <?php echo $mensagem; ?></p>
    <a href="exercicio03.html"> Voltar</a>
  </div>
</body>
</html>
