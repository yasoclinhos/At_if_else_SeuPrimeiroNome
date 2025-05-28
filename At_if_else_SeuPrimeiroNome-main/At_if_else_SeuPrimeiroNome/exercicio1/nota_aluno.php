<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
    $nm_aluno = $_POST['nm_aluno'];
    $nota01 = $_POST['nota01'];
    $nota02 = $_POST['nota02'];
    $nota03 = $_POST['nota03'];
    $nota04 = $_POST['nota04'];

  
    $media = ($nota01 + $nota02 + $nota03 + $nota04) / 4;
    $resultado = "";


    if ($media < 5) {
        $resultado = "Aluno reprovado! Sua nota: " . $media;
    } elseif ($media < 6) {
        $resultado = "Aluno de recuperação! Sua nota: " . $media;
    } else {
        $resultado = "Aluno aprovado! Sua nota: " . $media;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Nota</title>
    <!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Resultado da Nota</title>
  <style>
    body {
      margin: 0;
      background: linear-gradient(to right, #535353, #acacac, #d7d7d7);
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      color: #fff;
    }

    .principal {
      background: rgba(255, 255, 255, 0.12);
      backdrop-filter: blur(12px);
      padding: 30px 40px;
      border-radius: 15px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
      width: 360px;
      max-width: 90vw;
      text-align: center;
    }

    .container {
      display: flex;
      flex-direction: column;
      gap: 25px;
    }

    .lado_direito {
      font-weight: 700;
      font-size: 22px;
      color: #fff;
      text-shadow: 0 1px 5px rgba(0,0,0,0.3);
    }

    .nota_aluno {
      font-size: 20px;
      padding: 15px 20px;
      border-radius: 12px;
      background: #535353;
      box-shadow: 0 5px 15px rgba(000, 00, 00, 0.5);
      font-weight: 600;
      letter-spacing: 0.5px;
    }

    
    .reprovado {
      background: rgba(255, 50, 50, 0.8);
      box-shadow: 0 5px 15px rgba(255, 50, 50, 0.6);
    }

    .recuperacao {
      background: rgba(255, 180, 50, 0.85);
      box-shadow: 0 5px 15px rgba(255, 180, 50, 0.6);
    }

    .aprovado {
      background: rgba(50, 200, 50, 0.85);
      box-shadow: 0 5px 15px rgba(50, 200, 50, 0.6);
    }

    .btn-voltar {
      margin-top: 20px;
      padding: 12px 25px;
      background-color: #535353;
      border: none;
      border-radius: 10px;
      color: white;
      font-weight: 700;
      font-size: 16px;
      cursor: pointer;
      text-decoration: none;
      display: inline-block;
      transition: background-color 0.3s ease;
    }

    .btn-voltar:hover {
      background-color: #d11f0f;
    }
  </style>
</head>
<body>
    <main class="principal">
        <?php if (isset($resultado)): ?>
            <div class="container">
                <aside class="lado_direito"><?php echo htmlspecialchars($nm_aluno); ?></aside>
                <div class="nota_aluno"><?php echo htmlspecialchars($resultado); ?></div>
            </div>
            <a href="exercicio03.html" class="btn-voltar"> Voltar</a>

        <?php endif; ?>
    </main>
</body>
</html>
