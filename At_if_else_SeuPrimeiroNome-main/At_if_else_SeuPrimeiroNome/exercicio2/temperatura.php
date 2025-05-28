<?php
$temp = $_GET["temp"];

if ($temp < 0) {
    $mensagem = "Congelante";
    $cor = "#00BFFF"; 
} elseif ($temp < 15) {
    $mensagem = "Muito frio";
    $cor = "#1E90FF";
} elseif ($temp < 25) {
    $mensagem = "Razoável";
    $cor = "#32CD32"; 
} else {
    $mensagem = "Calor";
    $cor = "#FF6347"; 
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>resultado Temperatura</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #74ebd5, #ACB6E5);
            margin: 0;
            padding: 0;
            display: flex;
            height: 100vh;
            align-items: center;
            justify-content: center;
        }

        .resultado {
            background-color: white;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            text-align: center;
            max-width: 400px;
            width: 100%;
        }

        .resultado h2 {
            margin-bottom: 10px;
            font-size: 24px;
            color: #333;
        }

        .mensagem {
            font-size: 20px;
            font-weight: bold;
            color: white;
            background-color: <?= $cor ?>;
            padding: 10px;
            border-radius: 6px;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border-radius: 6px;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="resultado">
        <h2>Temperatura: <?= htmlspecialchars($temp) ?> °C</h2>
        <div class="mensagem"><?= $mensagem ?></div>
        <a href="index.html">Voltar</a>
    </div>
</body>
</html>
