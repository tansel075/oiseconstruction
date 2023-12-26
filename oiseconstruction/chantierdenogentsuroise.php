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
    <title>Oise Construction - Chantier de Nogent-Sur-Oise</title>
</head>
<body>
<?php
            include "./assets/includes/header.php"

        ?>
    <main>
        <div class="mama">
            <h1>CHANTIER DE NOGENT-SUR-OISE</h1>
            <div class="chantiernogent">
                <div class="nogent1">
                    <img src="./assets/images/photo chantier nogent sur oise/photo8.jpg" alt="">
                    <img src="./assets/images/photo chantier nogent sur oise/photo7.jpg" alt="">
                </div>
                <div class="nogent2">
                    <img src="./assets/images/photo chantier nogent sur oise/photo6.jpg" alt="">
                    <img src="./assets/images/photo chantier nogent sur oise/photo5.jpg" alt="">
                </div>
                <div class="nogent3">
                    <img src="./assets/images/photo chantier nogent sur oise/photo4.jpg" alt="">
                    <img src="./assets/images/photo chantier nogent sur oise/photo3.jpg" alt="">
                </div>
                <div class="nogent4">
                    <img src="./assets/images/photo chantier nogent sur oise/photo2.jpg" alt="">
                    <img src="./assets/images/photo chantier nogent sur oise/photo1.jpg" alt="">
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