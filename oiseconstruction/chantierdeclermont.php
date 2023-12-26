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
    <title>Oise Construction - Chantier de Clermont</title>
</head>
<body>
<?php
            include "./assets/includes/header.php"

        ?>
    <main>
        <div class="mama">
            <h1>CHANTIER DE CLERMONT</h1>
            <div class="flexholder">
                <div class="clermont1">
                    <img src="./assets/images/Photo chantier Clermont/photo6.jpg" alt="">
                    <img src="./assets/images/Photo chantier Clermont/photo5.jpg" alt="">
                </div>
                <div class="clermont2">
                    <img src="./assets/images/Photo chantier Clermont/photo4.jpg" alt="">
                    <img src="./assets/images/Photo chantier Clermont/photo3.jpg" alt="">
                </div>
                <div class="clermont3">
                    <img src="./assets/images/Photo chantier Clermont/photo2.jpg" alt="">
                    <img src="./assets/images/Photo chantier Clermont/photo1.jpg" alt="">
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