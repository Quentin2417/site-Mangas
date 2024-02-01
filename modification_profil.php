<?php require("./inc/init.inc.php");
$title = " | modification profil";?>
<?php 
if($_POST){
    $mdp = $_SESSION['membre'] ['mot_de_passe'];
        executeRequete (" REPLACE INTO utilisateur (id_membre, nom, prenom, mot_de_passe, email, civilité, ville, code_postal, adresse)
        VALUES('$_POST[id_membre]','$_POST[nom]', '$_POST[prenom]','$mdp', '$_POST[email]','$_POST[civilité]','$_POST[ville]','$_POST[code_postal]','$_POST[adresse]')");
        session_destroy();
        $contenu .= "<div class='validation'>Mofification validé !!<a href=\"profil.php\"></a></div>";
        header("location: connexion.php");
    }
?>
<?php require("./inc/haut.inc.php");?>
<?php
echo $contenu;
if (isset($_GET['action']) && ($_GET['action'] == "modification")) {
    if (isset($_GET['id_membre'])) {
        $resultat = executeRequete("SELECT * FROM utilisateur where id_membre=$_GET[id_membre]");
        $membre_actuel = $resultat->fetch_assoc();
    }
    echo '
    <form class="modification" method="post" action="" enctype="multipart/form-data">
    <h2>Modification</h2>
    <input type="hidden" name="id_membre" value="';
    if (isset($membre_actuel['id_membre'])) echo $membre_actuel['id_membre'];
    echo '"><br>
    <label for="nom">Votre nom</label>
    <input type="text" id="nom" name="nom" placeholder="Votre nom" 
    value="';
    if (isset($membre_actuel['nom'])) echo $membre_actuel['nom'];
    echo '"><br>
    <label for="prenom">Votre prenom</label>
    <input type="text" id="prenom" name="prenom" placeholder="Votre prenom" 
    value="';
    if (isset($membre_actuel['prenom'])) echo $membre_actuel['prenom'];
    echo '"><br>
    <label for="civilité">Civilité</label>
    <div><input type="radio" name="civilité" value="m"';
    if (isset($membre_actuel) && $membre_actuel['civilité'] == 'm') echo ' checked ';
    elseif (!isset($membre_actuel) && !isset($_POST['civilité'])) echo 'checked';
    echo '>Homme
        <input type="radio" name="civilité" value="f"';
    if (isset($membre_actuel) && $membre_actuel['civilité'] == 'f') echo ' checked ';
    echo '>Femme</div><br>
    <label for="email">Adresse mail</label>
    <input type="text" id="email" name="email" placeholder="Votre email" 
    value="';
    if (isset($membre_actuel['email'])) echo $membre_actuel['email'];
    echo '"><br>
    <label for="adresse">Votre adresse</label>
    <input type="text" id="adresse" name="adresse" placeholder="Votre adresse" 
    value="';
    if (isset($membre_actuel['adresse'])) echo $membre_actuel['adresse'];
    echo '"><br>
    <label for="code_postal">Votre code postal</label>
    <input type="text" id="code_postal" name="code_postal" placeholder="Votre code_postal" 
    value="';
    if (isset($membre_actuel['code_postal'])) echo $membre_actuel['code_postal'];
    echo '"><br>
    <label for="ville">ville</label>
    <input type="text" id="ville" name="ville" placeholder="Votre ville" 
    value="';
    if (isset($membre_actuel['ville'])) echo $membre_actuel['ville'];
    echo '"><br>
    <button>Confirmer modification</button>
    </form>';
}
?>
<?php require("./inc/bas.inc.php");