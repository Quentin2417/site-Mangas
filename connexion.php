<?php require("./inc/init.inc.php");
$title = " | Connexion";
?>
<?php 
if(isset($_GET['action']) && $_GET['action'] == "deconnexion") {
    session_destroy();
}
if(UtilisateurConnecte()) {
    header("location: index.php");
}
if($_POST){
    $resultat = executeRequete(("SELECT * from utilisateur where email='$_POST[email]'"));
    if($resultat ->num_rows !=0){
        $membre = $resultat->fetch_assoc();
        if(password_verify($_POST['mot_de_passe'], $membre['mot_de_passe'])) {
            foreach($membre as $indice => $element) {
                    $_SESSION['membre'][$indice] = $element;
            }
        } else {
            $contenu .= '<div class"Erreur">Erreur de mot de passe</div>';
        } //si tout bon redirection sur :
        header("location: index.php");
    } else {
        $contenu .= '<div class "erreur">Erreur d\'adresse mail</div>';
    }
}
?>
<?php require("./inc/haut.inc.php");?>
<div class="connexion">
    <form method="post" action="">
        <h2>Connexion</h2><br><br>
            <label for="email">Adresse mail :</label>
            <input type="email" id="email" name="email" placeholder="Entrer votre adresse mail" required><br><br>
            <label for="password">Mot de passe</label>
            <input type="password" id="mot_de_passe" name="mot_de_passe" placeholder="Entrer votre mot de passe" required><br><br>
            <button>Connexion</button><br>
        </form>
        <div class="conditions">
            <p>En passant votre commande, vous acceptez les Conditions générales de vente de Mangas-Zone.</p> 
            <p>Veuillez consulter notre Notice Protection de vos informations personnelles,</p>
            <p>notre Notice Cookies et notre Notice Annonces publicitaires basées sur vos centres d’intérêt.</p><br>
        </div>
        <span>  -- Nouveau chez Mangas-zone !! --</span><br>
        <button class="newcompte" >
            <a href="<?php RACINE_SITE; ?>inscription.php">Créer un compte Mangas-Zone</a>
        </button>
        

<?php echo $contenu; ?>
<?php require("./inc/bas.inc.php");?>