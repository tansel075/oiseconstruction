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
    <title>Oise Construction - Chantier de Beauvais</title>
</head>
<body>
<?php
            include "./assets/includes/header.php"

        ?>
    <main>
        <div class="mama">
            <h1>CHANTIER DE BEAUVAIS</h1>
            <div class="flexholder">
                <div class="beauvais1">
                    <img src="./assets/images/chantier de beauvais/photo6.jpg" alt="">
                    <img src="./assets/images/chantier de beauvais/photo5.jpg" alt="">
                </div>
                <div class="beauvais2">
                    <img src="./assets/images/chantier de beauvais/photo4.jpg" alt="">
                    <img src="./assets/images/chantier de beauvais/photo3.jpg" alt="">
                </div>
                <div class="beauvais3">
                    <img src="./assets/images/chantier de beauvais/photo2.jpg" alt="">
                    <img src="./assets/images/chantier de beauvais/photo1.jpg" alt="">
                </div>
               
            </div>
                 <a href="./contact.php"><button class="btn">CONTACT</button></a>
        </div>
    </main>
    <?php
            include "./assets/includes/footer.php"

        ?>
    
    
</body>
</html>