<?php require("./inc/init.inc.php");
$title = " | Profil";?>
<?php 
if(UtilisateurConnecte())
$contenu .= '<div class="cadre"><h2>Profil</h2><br>';
$contenu .= '<p> Votre nom est : ' . $_SESSION['membre'] ['nom'] . '</p><br>';
$contenu .= '<p> Votre prenom est : ' . $_SESSION['membre'] ['prenom'] . '</p><br>';
$contenu .= '<p> Votre civilité est : ' . $_SESSION['membre'] ['civilité'] . '</p><br>';
$contenu .= '<p> Votre adresse mail est : ' . $_SESSION['membre'] ['email'] . '</p><br>';
$contenu .= '<p> Votre ville est : ' . $_SESSION['membre'] ['ville'] . '</p><br>';
$contenu .= '<p> Votre code postale est : ' . $_SESSION['membre'] ['code_postal'] . '</p><br>';
$contenu .= '<p> Votre adresse est : ' . $_SESSION['membre'] ['adresse'] . '</p><br>';
$contenu .= '<a href="modification_profil.php?action=modification&id_membre=' . $_SESSION['membre'] ['id_membre'] . '">Modifier</a>';
?>
<?php require("./inc/haut.inc.php");?>
<?php echo $contenu ?>
<?php require("./inc/bas.inc.php");?>