<?php require("./inc/init.inc.php");
$title = " | description_figurines";
if (isset($_GET['nom'])) {
    $resultat = executeRequete("SELECT * FROM produit WHERE nom='$_GET[nom]'");
}
if ($resultat->num_rows <= 0) {
    header('location: index.php');
    exit();
}
$produit = $resultat->fetch_assoc();
$contenu .='<div class="description">';
$contenu .= "<img src='$produit[photo]' ='300' height='300'>";
$contenu .= "<h2>Nom : $produit[nom]</h2><hr><br>";
$contenu .= "<p>Description: $produit[description]</p><br>";
// $contenu .= "<p>Taille: $produit[taille]</p>";
$contenu .= "<p>Prix: $produit[prix] €</p><br>";
if ($produit['stock'] > 0) {
    $contenu .= "<i>Nombre de produit(s) disponible(s) : $produit[stock].</i>";
    $contenu .= '<form method="post" action="panier.php">';
    $contenu .= "<input type='hidden' name='idproduit' value='$produit[idproduit]'><br>";
    $contenu .= '<div><label for="quantite">Quantité : </label>';
    $contenu .= '<select id="quantite" name="quantite"><br>';
    for ($i = 1; $i <= $produit['stock'] && $i <= 5; $i++) {
        $contenu .= "<option>$i</option>";
    }
    $contenu .= '</select></div><br>';
    $contenu .= '<button>ajout au panier</button><br>';
    $contenu .= '</form>';
} else {
    $contenu .= 'Rupture de stock!';
}
$contenu .= "<a href='index.php'>Retour à l'accueil </a>";
$contenu .= '</div>';
?>
<?php require("./inc/haut.inc.php");?>
<?php echo $contenu; ?>
<?php require("./inc/bas.inc.php");?>