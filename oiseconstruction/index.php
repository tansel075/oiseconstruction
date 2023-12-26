<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="shortcut icon" href="./assets/images/logo Oise construction.png">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Oise Construction - Accueil</title>
</head>
<body>
    
    <?php
            include "./assets/includes/header.php"

        ?>
    <main>
        



        <div class="mama">
            <h1>BIENVENUE SUR NOTRE OISE CONSTRUCTION</h1>
            <P>ENTREPRISE GENERALE DU BÂTIMENT <br><br>
                Nous travaillons dans la région Picardie et <br> 
                nous réalisons tout types d'œuvres de bâtiment  <br>
                pour répondre au besoin de tout le monde <br>
                nous faisons la maçonnerie, électricité,  <br>
                menuiserie intérieur et extérieur, plomberie, et autre que <br>
                 vous auriez besoin pour rénover  ou construire votre habitat <br> </P>
                 <br><br><br>
                 <a href="./contact.php"><button class="btn">CONTACT</button></a>
        </div>
    </main>
        
    <?php
            include "./assets/includes/footer.php"

        ?>
    
</body>
</html>