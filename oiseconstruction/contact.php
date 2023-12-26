<?php
session_start();


if(!empty($_POST["envoie"])){
    include_once "./assets/includes/fonctions.php";
    $valideprenom = verifyname($_POST["prenom"]);
    $validenom = verifyname($_POST["nom"]);
    $validemail = verifymail($_POST["mail"]);
    $validetel = verifytelephone($_POST["telephone"]);
    $valideadress = verifytext($_POST["adresse"]);
    $validecp = verifycp($_POST["cp"]);
    $valideville = verifytext($_POST["ville"]);
}
if(!empty($_POST["client"])){
    include_once "./assets/includes/connexionbdd.php";
    $civilite = secu($_POST["civilite"]);
    $prenom = secu($_POST["prenom"]);
    $nom = secu($_POST["nom"]);
    $mail = secu($_POST["mail"]);
    $tel = secu($_POST["tel"]);
    $adress = secu($_POST["adresse"]);
    $cp = secu($_POST["cp"]);
    $ville = secu($_POST["ville"]);
    $demande = secu($_POST["demande"]);
    $text = secu($_POST["mot"]);
    

    $sql = "INSERT INTO client (civilite , prenom, nom, mail, telephone, adresse, codePostal, ville, demande, mot) 
    VALUES (:civilite, :prenom, :nom, :mail,:telephone, :adresse, :codePostal, :ville, :demande, :mot)";
    $insertion = $connexion -> prepare($sql); 
    $insertion -> bindParam(":civilite", $civilite, PDO::PARAM_STR);
    $insertion -> bindParam(":prenom", $prenom, PDO::PARAM_STR);
    $insertion -> bindParam(":nom", $nom, PDO::PARAM_STR);
    $insertion -> bindParam(":mail", $mail, PDO::PARAM_STR);
    $insertion -> bindParam(":telephone", $tel, PDO::PARAM_STR);
    $insertion -> bindParam(":adresse", $adress, PDO::PARAM_STR);
    $insertion -> bindParam(":codePostal", $cp, PDO::PARAM_STR);
    $insertion -> bindParam(":ville", $ville, PDO::PARAM_STR);
    $insertion -> bindParam(":demande", $demande, PDO::PARAM_STR);
    $insertion -> bindParam(":mot", $text, PDO::PARAM_STR);
    $insertion -> execute();
    
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="shortcut icon" href="./assets/images/logo Oise construction.png">
    <link rel="stylesheet" href="./assets/css/style2.css">
    <title>Oise Construction - Contact</title>
</head>
<body>
<?php
            include "./assets/includes/header.php"

        ?>
    <main>
        <div class="mama">
            <h1>CONTACT</h1>
            <form action="" method="post" enctype="multipart/form-data">
                <select name="civilite" required >
                    <option value="Mr">Mr.</option>
                    <option value="Mme">Mme.</option>
                </select> <br>
                <input type="text" name="prenom" placeholder="Prenom" required> <br>
                <?php
                     if(!empty($_POST["envoie"]) && ($valideprenom != 1) ){
                        echo "<span style= 'color: red'> le prénom e doit contenir que des lettres</span><br>";
                    }
                ?>
                <input type="text" name="nom" placeholder="Nom" required> <br>
                <?php
                    if(!empty($_POST["envoie"]) && ($validenom != 1) ){
                        echo "<span style= 'color: red'> le nom doit contenir que des lettres</span><br>";
                    }
                ?>
                <input type="email" name="mail" placeholder="E-Mail" required> <br>
                <?php
                    if(!empty($_POST["envoie"]) && ($validemail != 1) ){
                        echo "<span style= 'color: red'> l'adresse mail saisie est incorrecte.</span><br>";
                    }
                    // if(!empty($_POST["envoie"]) && ($exist != 0) ){
                    //     echo "<span style= 'color: red'> l'adresse mail saisie est déjà utilisée par un autre utilisateur.</span><br>";
                    // }
                ?>
                <input type="number" name="telephone" placeholder="Telephone" required> <br>
                <?php
                    if(!empty($_POST["envoie"]) && ($validetel != 1) ){
                        echo "<span style= 'color: red'> le telephone doit etre composé de 10 chiffres.</span><br>";
                    }
                ?>
                <input type="text" name="adresse" placeholder="Adresse" required> <br>
                <?php
                    if(!empty($_POST["envoie"]) && ($valideadress != 1) ){
                        echo "<span style= 'color: red'> l'adresse saisie est incorrecte.</span><br>";
                    }
                ?>
                <input type="number" name="cp" placeholder="Code postal" required> <br>
                <?php
                    if(!empty($_POST["envoie"]) && ($validecp != 1) ){
                        echo "<span style= 'color: red'> le Code postal est incorrect.</span><br>";
                    }
                ?>
                <input type="text" name="ville" placeholder="Ville" required> <br>
                <?php
                    if(!empty($_POST["envoie"]) && ($valideville != 1) ){
                        echo "<span style= 'color: red'> la ville e doit contenir que des lettres</span><br>";
                    }
                ?>
                <select name="demande" required>
                    <option value="Devis">Devis</option>
                    <option value="SAV">SAV</option>
                    <option value="Reclamation">Réclamation</option>
                </select> <br>

                <textarea name="mot" id="" cols="30" rows="10" placeholder="Message" required></textarea> <br> <br>
                
                <input type="submit" value="ENVOYER" name="envoie" class="btn2" required><br>
                <!-- <button class="btn" type="submit" name="envoie">ENVOYER</button> -->
            </form>
            <br><br><br>
            
                 <a href="./index.php"><button class="btn">ACCUEIL</button></a>
                 <a href="./rendezvous.php"><button class="btn1">RENDEZ-VOUS</button></a>
                 <a href="https://www.google.com/search?hl=fr-FR&gl=fr&q=Oise+Construction,+1+bis+Rue+du+Ch%C3%A2tellier,+60600+Clermont&ludocid=1600506845683694245&lsig=AB86z5XaOjX7igXhCwugTFHvluEN&hl=fr&gl=FR#lrd=0x47e7b578852965d1:0x1636247f0d8ebaa5,1,,,,"><button class="btn1">AVIS CLIENT</button></a>
                 <br><br>
                 <div>
                    <p>HORAIRE</p>
                    <P>LUNDI AU VENDREDI ENTRE 8H ET 12H</P>
                    <p>ENTRE 12H ET 16H</p>
                    <p>FERMER SAMEDI ET DIMANCHE</p>
                 </div>
                 <br><br>
                 <div>
                    <p>Vous pouvez donner votre en cliquant sur avis sur la carte ci-dessous</p>

                 </div>
                 <br><br>
                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d162.35363525879887!2d2.4158757971223435!3d49.377540769286384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e7b578852965d1%3A0x1636247f0d8ebaa5!2sOise%20Construction!5e0!3m2!1sfr!2sfr!4v1702549899703!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>
    </main>
    <?php
            include "./assets/includes/footer.php"

        ?>
    
    
</body>
</html>