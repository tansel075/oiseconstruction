<?php
session_start();
// Récuperation des variables passées, on donne soit année; mois; année+mois
if(!isset($_GET['mois'])) $num_mois = date("n"); else $num_mois = $_GET['mois'];
if(!isset($_GET['annee'])) $num_an = date("Y"); else $num_an = $_GET['annee'];

// pour pas s'embeter a les calculer a l'affchage des fleches de navigation...
if($num_mois < 1) { $num_mois = 12; $num_an = $num_an - 1; }
elseif($num_mois > 12) {	$num_mois = 1; $num_an = $num_an + 1; }

// nombre de jours dans le mois et numero du premier jour du mois
$int_nbj = date("t", mktime(0,0,0,$num_mois,1,$num_an));
$int_premj = date("w",mktime(0,0,0,$num_mois,1,$num_an));

// tableau des jours, tableau des mois...
$tab_jours = array("","Lu","Ma","Me","Je","Ve","Sa","Di");
$tab_mois = array("","Janvier","Fevrier","Mars","Avril","Mai","Juin","Juillet","Aout","Septembre","Octobre","Novembre","Decembre");

$int_nbjAV = date("t", mktime(0,0,0,($num_mois-1<1)?12:$num_mois-1,1,$num_an)); // nb de jours du mois d'avant
$int_nbjAP = date("t", mktime(0,0,0,($num_mois+1>12)?1:$num_mois+1,1,$num_an)); // b de jours du mois d'apres

// on affiche les jours du mois et aussi les jours du mois avant/apres, on les indique par une * a l'affichage on modifie l'apparence des chiffres *
$tab_cal = array(array(),array(),array(),array(),array(),array()); // tab_cal[Semaine][Jour de la semaine]
$int_premj = ($int_premj == 0)?7:$int_premj;
$t = 1; $p = "";
for($i=0;$i<6;$i++) {
	for($j=0;$j<7;$j++) {
		if($j+1 == $int_premj && $t == 1) { $tab_cal[$i][$j] = $t; $t++; } // on stocke le premier jour du mois
		elseif($t > 1 && $t <= $int_nbj) { $tab_cal[$i][$j] = $p.$t; $t++; } // on incremente a chaque fois...
		elseif($t > $int_nbj) { $p="*"; $tab_cal[$i][$j] = $p."1"; $t = 2; } // on a mis tout les numeros de ce mois, on commence a mettre ceux du suivant
		elseif($t == 1) { $tab_cal[$i][$j] = "*".($int_nbjAV-($int_premj-($j+1))+1); } // on a pas encore mis les num du mois, on met ceux de celui d'avant
	}
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="shortcut icon" href="./assets/images/logo Oise construction.png">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Oise Construction - Rendez-Vous</title>
</head>
<body onLoad="setCurrentMonth()">
<?php
            include "./assets/includes/header.php"

        ?>
    <main>
        <div class="mama1">
            <h1>RENDEZ-VOUS</h1>
            <!-- <form action="" method="post">
                <select name="DATE" id="jours">
                    <option value="01">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                    <option value="04">04</option>
                    <option value="05">05</option>
                    <option value="06">06</option>
                    <option value="07">07</option>
                    <option value="08">08</option>
                    <option value="09">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                </select>
                <select name="DATE" id="mois">
                    <option value="JANVIER">JANVIER</option>
                    <option value="FEVRIER">FEVRIER</option>
                    <option value="MARS">MARS</option>
                    <option value="AVRIL">AVRIL</option>
                    <option value="MAI">MAI</option>
                    <option value="JUIN">JUIN</option>
                    <option value="JUILLET">JUILLET</option>
                    <option value="AOUT">AOUT</option>
                    <option value="SEPTEMBRE">SEPTEMBRE</option>
                    <option value="OCTOBRE">OCTOBRE</option>
                    <option value="NOVEMBRE">NOVEMBRE</option>
                    <option value="DECEMBRE">DECEMBRE</option>
                </select> 
                <select name="DATE" id="annees">
                    <option value="2024">2024</option>
                </select> <br>
                <select name="DATE" id="heures">
                    <option value="08">08</option>
                    <option value="09">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                </select>
                <select name="DATE" id="minutes">
                    <option value="00">00</option>
                    <option value="15">15</option>
                    <option value="30">30</option>
                    <option value="45">45</option>
                </select>
                <br><br>
                <input type="submit" value="ENVOYER" name="envoie" class="btn2" required><br>
                
            </form> -->
            <table>
	<tr><td colspan="7" align-items="center"><a href="calendrier.php?mois=<?php echo $num_mois-1; ?>&amp;annee=<?php echo $num_an; ?>"><<</a>&nbsp;&nbsp;<?php echo $tab_mois[$num_mois];  ?>&nbsp;&nbsp;<a href="calendrier.php?mois=<?php echo $num_mois+1; ?>&amp;annee=<?php echo $num_an; ?>">>></a></td></tr>
	<tr><td colspan="7" align-items="center"><a href="calendrier.php?mois=<?php echo $num_mois; ?>&amp;annee=<?php echo $num_an-1; ?>"><<</a>&nbsp;&nbsp;<?php echo $num_an;  ?>&nbsp;&nbsp;<a href="calendrier.php?mois=<?php echo $num_mois; ?>&amp;annee=<?php echo $num_an+1; ?>">>></a></td></tr>
	<?php
	echo'<tr>';
	for($i = 1; $i <= 7; $i++){
		echo('<td>'.$tab_jours[$i].'</td>');
	}
	echo'</tr>';

	for($i=0;$i<6;$i++) {
		echo "<tr>";
		for($j=0;$j<7;$j++) {
			echo "<td".(($num_mois == date("n") && $num_an == date("Y") && $tab_cal[$i][$j] == date("j"))?' style="color: #FFFFFF; background-color: #000000;"':null).">".((strpos($tab_cal[$i][$j],"*")!==false)?'<font color="#aaaaaa">'.str_replace("*","",$tab_cal[$i][$j]).'</font>':$tab_cal[$i][$j])."</td>";
		}
		echo "</tr>";
	}
	?>
</table>
            
            <br><br><br>
            
                 <a href="./index.php"><button class="btn">ACCUEIL</button></a>
                 <a href="./contact.php"><button class="btn">CONTACT</button></a>
                 
                 <br><br>
                
        </div>
    </main>
    <?php
            include "./assets/includes/footer.php"

        ?>
    
    
</body>
</html>