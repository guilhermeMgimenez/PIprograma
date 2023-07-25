<html>
    <head>
        <meta name="viewport" content=""width=device-width, initial-scale="1.0">
        <meta charset="UTF-8">
        <title>Site Guitar Info</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php include_once "sessao-login.php"; ?>

        <div class="hero">
            <video autoplay loop muted plays-inline id="backVideo">
                <source src="images/violao3.mp4" type="video/mp4">
            </video>
        
            <img src="images/hamburger.png" class="menu-icon">

            <div class="sidebar">
                <div class="top-links">
                    <img src="images/arrow.png" class="arrow-icon">
                    <div>
                        <?php
                        if (isset($_SESSION['usuario'])) {
                            $usuario = $_SESSION['usuario'];
                            $buttonText = "Logout";
                            $buttonLink = "logout.php";
                        
                        } else {
                            $buttonText = "Login";
                            $buttonLink = "login.php";
                        }
                        ?>
                        <a href="<?php echo $buttonLink; ?>"><?php echo $buttonText; ?></a>
                    </div>
                </div>

                <h1>Vendas de Violão</h1>
                <h3>Americana, BR</h3>
                <p>Em nosso site, você encontrará uma interface intuitiva e amigável que o ajudará a navegar facilmente por nossa vasta coleção de violões. Cada instrumento é cuidadosamente descrito, fornecendo informações detalhadas sobre seu estado, ano de fabricação, marca e características especiais. Queremos garantir que você tenha todas as informações necessárias para fazer a escolha certa.</p>

                <a href="lending2.php">Mais Detalhes</a>

            </div>

            <img src="images/play.png" id="btn">

        </div>
    </body>
</html>