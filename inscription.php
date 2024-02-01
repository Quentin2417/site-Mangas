<?php require("./inc/init.inc.php");
$title = " | Inscritpion";?>
 <?php 
 if($_POST){
    $utilisateur = executeRequete("SELECT * from utilisateur where email = '$_POST[email]'");
    if($utilisateur ->num_rows > 0) {
        $contenu .= "<div class'erreur'>Adresse mail déjà utiliser. veuillez en entrer une autre ou connecter vous !</div>";
    } else {
        $_POST['mot_de_passe'] = password_hash($_POST['mot_de_passe'], PASSWORD_BCRYPT);
        foreach($_POST as $indice => $valeur) {
            $_POST[$indice] = htmlentities(addslashes($valeur));
        }
        executeRequete ("INSERT INTO utilisateur (nom, prenom, mot_de_passe, email, civilité, ville, code_postal, adresse)
        VALUES('$_POST[nom]', '$_POST[prenom]', '$_POST[mot_de_passe]','$_POST[email]','$_POST[civilite]','$_POST[ville]','$_POST[code_postal]','$_POST[adresse]')");
        $contenu .= "<div class='validation'>Inscription validé !!<a href=\"connexion.php\"></a></div>";
        header("location: connexion.php");
    }
 }
 ?>

<?php require("./inc/haut.inc.php");?>
<div class="inscription">
    <form method="post" action="">
        <h2>Inscription</h2><br>
        <label for="nom">Votre nom :</label>
        <input type="text" id="nom" name="nom" placeholder="Entrer votre Nom"  required><br>
        <label for="prenom">Votre prenom :</label>
        <input type="text" id="prenom" name="prenom" placeholder="Entrer votre prenom"><br>
        <label for="civilite">Civilité :</label>
    <div>
        <input name="civilite" value="m" checked="" type="radio">Homme
        <input name="civilite" value="f" type="radio">Femme
    </div><br>
        <label for="email">Adresse mail :</label>
        <input type="email" id="email" name="email" placeholder="Entrer votre adresse mail" required><br>
        <label for="mot_de_passe">Mot de passe :</label>
        <input type="password" id="mot_de_passe" name="mot_de_passe" placeholder="Entrer votre mot de passe"  required><br>
        <label for="adresse">Votre adresse :</label>
        <input type="text" id="adresse" name="adresse" placeholder="Entrer votre adresse"><br>
        <label for="code_postal">Votre code postal :</label>
        <input type="text" id="code_postal" name="code_postal" placeholder="Entrer votre code postal"><br>
        <label for="ville">Votre ville :</label>
        <input type="text" id="ville" name="ville" placeholder="Entrer votre ville"><br>
        <button>Continuer</button>
    </form>
    <div class="conditions">
        <p>En passant votre commande, vous acceptez les Conditions générales de vente de Mangas-Zone.</p> 
        <p>Veuillez consulter notre Notice Protection de vos informations personnelles,</p>
        <p>notre Notice Cookies et notre Notice Annonces publicitaires basées sur vos centres d’intérêt.</p><br>
    </div>
    <h3>Vous posséder déjà un compte ?</h3>
    <a href="<?php RACINE_SITE; ?>connexion.php">Identifiez vous</a>
</div>

<?php echo $contenu ?>
<?php require("./inc/bas.inc.php");?>

