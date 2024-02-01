<?php require("./inc/init.inc.php");
$title = " | Demon Slayers";?>
<?php require("./inc/haut.inc.php");?>
<div class="banniere" id=myban>
    <img src="./inc/img/couverture/banniere/ban_demon_slayer.jpeg" alt="">
</div>
</div><br>
<?php 
$categories_des_produits = executeRequete("SELECT nom, description, photo, taille, prix FROM produit WHERE mangas='M4'");
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
    <h1>Hisoire du manga Demon Slayer : </h1><br>
    <p>Dans un Japon de l'ère Taishō, Tanjirō Kamado est le premier enfant d'une famille de marchands de charbon dont le père est décédé : pour subvenir aux besoins de celle-ci, il vend du charbon de bois au village en contrebas de la montagne. Malgré les difficultés de la vie, ils réussissent à trouver un peu de bonheur dans leur quotidien.</p><br>
<p>Un jour, à cause de rumeurs qui circulent à propos d'un démon mangeur d'hommes qui traînerait dans les parages la nuit tombée, il est obligé de passer la nuit chez un Bon Samaritain du village. Seulement, tout bascule à son retour lorsqu'il détecte grâce à son odorat aiguisé une forte odeur de sang : il se précipite chez lui et retrouve sa famille massacrée. Nezuko, l'une de ses petites sœurs, est bien qu'inconsciente la seule survivante et Tanjirō l'emporte donc avec lui, pour tenter de l'amener chez un médecin qui pourrait peut-être la sauver : elle reprend cependant conscience en chemin et, étant devenue elle-même un démon, attaque son frère mais finit tout de même par montrer des signes d'émotions et de pensées humaines. C'est à ce moment qu'intervient un Pourfendeur de démons du nom de Giyū Tomioka, chargé d'éliminer le démon sévissant dans la région. Alors qu'il tente de tuer Nezuko, Giyū se rend compte du comportement singulier de cette dernière qui, au lieu de chercher à dévorer son frère, tente de s'interposer pour empêcher le Pourfendeur de s'en prendre à Tanjirō, qui l'avait défié afin de la sauver alors qu'il n'avait aucune chance, et décide ainsi de les laisser en rengainant son sabre.</p>
<p>Sur les conseils de Giyū, Tanjirō se rend chez son maître Sakonji Urokodaki pour s'entraîner à devenir un Pourfendeur de démons, afin d'entamer son périple pour tenter de trouver un antidote pouvant rendre à nouveau humaine sa petite sœur (chose qui, de mémoire d’homme et avec les connaissances médicales actuelles, est en l'état impossible) tout en protégeant les Humains des démons, ainsi que retrouver le démon responsable du massacre de sa famille et de la transformation de Nezuko pour se venger.</p><br>
</div>
<?php require("./inc/bas.inc.php");?>