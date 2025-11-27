<?php
    $nome = "Ana Júlia";
    $bio = "17 anos, SESI/SENAI";
    $imagem = "https://lh3.googleusercontent.com/a-/ALV-UjUX-odKxRgPqFZJGKaR12OYc6sPhDSTHe9Ww83RDUrZWoQwqZvV=s360-p-k-rw-no";       

       $links = [
        "Instagram" => "https://instagram.com/ana_ferraz28",
        "WhatsApp"  => "https://web.whatsapp.com/",
        "Música do Momento" => "https://www.youtube.com/watch?v=oEauWw9ZGrA&list=PL-8M5stZkYjoLwnpdoBTSQMLIq6x5l83V"
    ];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DESAFIO TÉCNICO</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <img src="<?php echo $imagem; ?>" alt="Foto de Perfil" class="avatar">

        <h1> <?php echo $nome; ?> </h1>
        <p> <?php echo $bio; ?> </p>

        <div class="lista-links">
         
         <?php
            foreach ($links as $texto => $url) {
                $classe_extra = "";

                // DESAFIO: Se o texto for "WhatsApp" (ou outro que você queira), mude a variável $classe_extra para "destaque". Escreva o IF aqui:


                // O PHP constrói o botão HTML
                echo "<a href='$url' class='btn $classe_extra' target='_blank'>
                        $texto
                      </a>";
            }
            ?>

        </div>
    </div>
</body>
</html>