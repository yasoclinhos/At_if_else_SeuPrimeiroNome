<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lançamento de notas</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<style>
body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            flex-direction: column;
        }

        h1 {
            font-size: 2.5em;
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        
        .gallery {
            margin: 20px;
            border-radius: 10px;
            overflow: hidden;
            width: 280px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
        }

        .gallery:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

       
        .gallery img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.3s ease;
        }

        
        .gallery img:hover {
            transform: scale(1.05);
        }

        
        .desc {
            padding: 20px;
            text-align: center;
            background-color: #f7f7f7;
            font-size: 1.1em;
            color: #555;
            font-weight: 600;
            text-transform: capitalize;
            border-top: 1px solid #ddd;
        }

        
        .gallery a {
            text-decoration: none;
            display: block;
        }

       
        @media (max-width: 800px) {
            .gallery {
                width: 45%;
            }
        }

        @media (max-width: 500px) {
            .gallery {
                width: 90%;
            }
        }

       
        .gallery-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
    </style>

</head>

<body>

<h1></h1>

    <div class="gallery-container">
        <div class="gallery">
            <a target="_blank" href="exercicio1/exercicio01.html">
                <img src="imgs/img01.png" alt="Nota">
            </a>
            <div class="desc">Média das notas</div>
        </div>

        <div class="gallery">
            <a target="_blank" href="exercicio2/exercicio02.html">
                <img src="imgs/tempo.jpg" alt="Temperatura">
            </a>
            <div class="desc">Temperatura</div>
        </div>

        <div class="gallery">
            <a target="_blank" href="exercicio3/exercicio03.html">
                <img src="imgs/imc.jpg" alt="IMC">
            </a>
            <div class="desc">Calculo IMC</div>
        </div>
    </div>
</body>
</html>