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
        $resultado = "Aluno reprovado! " . $media;
    } elseif ($media < 6) {
        $resultado = "Aluno de recuperação! " . $media;
    } else {
        $resultado = "Aluno aprovado! " . $media;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Nota</title>
</head>
<body>
    <main class="principal">
        <?php if (isset($resultado)): ?>
            <div class="container">
                <aside class="lado_direito"><?php echo htmlspecialchars($nm_aluno); ?></aside>
                <div class="nota_aluno"><?php echo htmlspecialchars($resultado); ?></div>
            </div>
        <?php endif; ?>
    </main>
</body>
</html>
