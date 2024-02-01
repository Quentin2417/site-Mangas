<?php require_once('./inc/init_inc.php');

// <!-- traitement -->
if (isset($_GET['id_mangas'])) {
    $resultat = executeRequete("SELECT * FROM produit WHERE id_mangas='$_GET[id_mangas]'");
}
if ($resultat->num_rows <= 0) {
    header('location: one_piece.php');
    exit();
}
$produit = $resultat->fetch_assoc();
$contenu .= "<h2>Nom : $produit[nom]</h2><hr><br>";
$contenu .= "<p>Mangas: $produit[Mangas]</p>";
$contenu .= "<p>Taille: $produit[taille]</p>";
$contenu .= "<img src='$produit[photo]' ='150' height='150'>";
$contenu .= "<p><i>Description: $produit[description]</i></p><br>";
$contenu .= "<p>Prix : $produit[prix] €</p><br>";
if ($produit['stock'] > 0) {
    $contenu .= "<i>Nombre de produit(s) disponible(s) : $produit[stock].</i>";
    $contenu .= '<form method="post" action="panier.php">';
    $contenu .= "<input type='hidden' name='idproduit' value='$produit[idproduit]'>";
    $contenu .= '<div><label for="quantite">Quantité : </label>';
    $contenu .= '<select id="quantite" name="quantite">';
    for ($i = 1; $i <= $produit['stock'] && $i <= 5; $i++) {
        $contenu .= "<option>$i</option>";
    }
    $contenu .= '</select></div>';
    $contenu .= '<input type="submit" name="ajout_panier" value="ajout au panier">';
    $contenu .= '</form>';
} else {
    $contenu .= 'Rupture de stock!';
}
?>
<?php require_once('./inc/haut.inc.php'); ?>
<?php echo $contenu; ?>
<?php require_once('./inc/bas.inc.php'); ?>