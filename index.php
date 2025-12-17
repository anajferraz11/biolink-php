<?php
    $nome = "Ana Júlia";
    $bio = "17 anos, Sou lutadora de Kickboxing, Aluna SESI/SENAI: Desenvolvimento de Sistemas";
    $imagem = "https://lh3.googleusercontent.com/a-/ALV-UjUX-odKxRgPqFZJGKaR12OYc6sPhDSTHe9Ww83RDUrZWoQwqZvV=s360-p-k-rw-no";       
    $destaque = "https://www.youtube.com/watch?v=oEauWw9ZGrA&list=PL-8M5stZkYjoLwnpdoBTSQMLIq6x5l83V";

       $links = [
        "Instagram" => "https://www.instagram.com/",
        "WhatsApp"  => "https://web.whatsapp.com/",
        "TIK TOK"  => "https://www.tiktok.com/login?redirect_url=https%3A%2F%2Fwww.tiktok.com%2Fpt-BR%2F&lang=en&enter_method=mandatory",
        "Música do Momento" => "https://www.youtube.com/watch?v=oEauWw9ZGrA&list=PL-8M5stZkYjoLwnpdoBTSQMLIq6x5l83V"
    ];



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DESAFIO TÉCNICO</title>
    <link rel="stylesheet" href="style.css">
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

                if($url == "https://www.instagram.com/"){
                    $classe_extra = "destaque";
                }

                // Botão
                echo "<a href='$url' class='btn $classe_extra' target='_blank'>
                        $texto
                      </a>";
            }
            ?>

             
        </div>
          <div class="area-contato">
              <a href="contato.php" class="btn-msg">📧 Mandar Mensagem</a>
           </div>
    </div>
</body>
</html>