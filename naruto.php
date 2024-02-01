<?php require("./inc/init.inc.php");
$title = " | Naruto";?>
<?php require("./inc/haut.inc.php");?>
<div class="banniere" id=myban>
    <img src="./inc/img/couverture/banniere/ban_naruto.jpg" alt="">
</div>
</div><br>
<?php 
$categories_des_produits = executeRequete("SELECT nom, description, photo, taille, prix FROM produit WHERE mangas='M3'");
$contenu .= '<div class="figurine_one_piece">';
$contenu .= '<ul>';
while ($cat = $categories_des_produits->fetch_assoc()) {
    $contenu .= '<div class="figurine_one_piece">';
    $contenu .= "<li><a href=\"description_figurine.php?nom=$cat[nom]\">";
    $contenu .= "<img src=\"$cat[photo]\" width=\"300\" height=\"300\"></a>";
    $contenu .= "<p>" . $cat['nom'] . " </p>";
    $contenu .= "<p>" . $cat['taille'] . " cm </p>";
    $contenu .= "<p>" . $cat['prix'] . " €</p>";
    $contenu .= "</a></li>";
    $contenu .= '</div>';
}
$contenu .= '</ul>';
$contenu .= '</div>';
?>
<?php echo $contenu ?>
<div class="hist-mangas" id="myhist">
    <h1>Hisoire du manga Naruto  : </h1><br>
<p>L'histoire commence pendant l'adolescence de Naruto, vers ses douze ans. Orphelin cancre et grand farceur, il fait toutes les bêtises possibles pour se faire remarquer. Son rêve : devenir le meilleur Hokage afin d'être reconnu par les habitants de son village. En effet, le démon renard à neuf queues scellé en lui a attisé la crainte et le mépris des autres villageois, qui, avec le temps, ne font plus de différence entre Kyûbi et Naruto. Malgré cela, Naruto s'entraîne dur afin de devenir genin, le premier niveau chez les ninjas. Après avoir raté l'examen genin 3 fois, il arrive finalement à recevoir son bandeau frontal de Konoha. Il est alors inclus dans une équipe de trois apprentis ninjas, avec Sakura Haruno et le talentueux Sasuke Uchiwa qui veut venger les personnes chères à ses yeux, en tuant son frère Itachi Uchiwa. Peu après, ils rencontrent leur jōnin (ninja de classe supérieure), celui qui s'occupera de leur formation : le mystérieux Kakashi Hatake.<br>
Au début craint et méprisé par ses pairs, Naruto va peu à peu monter en puissance et gagner le respect et l'affection des villageois grâce, notamment, aux combats dantesques qu'il remportera face aux ennemis les plus puissants du monde ninja.</p><br>
</div>
<?php require("./inc/bas.inc.php");?>