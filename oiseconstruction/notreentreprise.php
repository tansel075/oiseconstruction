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
    <title>Oise Construction - Notre Entreprise</title>
</head>
<body>
<?php
            include "./assets/includes/header.php"

        ?>
    <main>
        <div class="mama">
            <h1>NOTRE ENTREPRISE</h1>
            <br><br>
                <P>
                Oise Construction c'est installé dans la commune de Clermont de l'Oise. <br>
                Une entreprise qui sera à votre écoute pour la réalisation des travaux de maçonnerie, <br> 
                plomberie, rénovation extérieur comme intérieur, isolation,<br>
                ravalement de façade, électricité,peinture d'intérieur <br>
                et autre chose que vous auriez besoin pour rénover votre habitat. <br>
                 </P>
                 <br><br>
                 <img class="img" src="./assets/images/boutique oise construction.jpg" alt="">
                 <img class="imd" src="./assets/images/flocage des vehicules.jpg" alt="">
                 <br><br><br>
                 <a href="./contact.php"><button class="btn">CONTACT</button></a>
        </div>
    </main>
    <?php
            include "./assets/includes/footer.php"

        ?>
        
    
    
</body>
</html>