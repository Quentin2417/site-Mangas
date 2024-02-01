<?php require("./inc/init.inc.php");
$title = " | Jujutsu Kaisen";?>
<?php require("./inc/haut.inc.php");?>
<div class="banniere" id=myban>
    <img src="./inc/img/couverture/banniere/ban_jujutsu_kaisen.jpg" alt="">
</div>
</div><br>
<?php 
$categories_des_produits = executeRequete("SELECT nom, description, photo, taille, prix FROM produit WHERE mangas='M8'");
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
    <h1>Hisoire du manga Jujutsu Kaisen  : </h1><br>
    <p>L'intrigue de Jujutsu Kaisen se déroule dans un monde où des fléaux sont créés à partir des émotions négatives des Humains. Ainsi, pour protéger les lieux avec une forte concentration de ces émotions comme les écoles ou les hôpitaux, ces infrastructures possèdent une relique, réceptacle d'un fléau, car l'on ne peut lutter contre les fléaux qu'avec un fléau plus puissant. Ceux-ci sont invisibles aux yeux des humains sauf pour une poignée de personnes, par exemple les exorcistes. Le métier d'exorciste consiste à éliminer les fléaux et ainsi protéger le peuple de ces derniers, mais cela n'est pas sans risques, car ces fléaux peuvent être plus ou moins puissants.</p>
<p>Yūji Itadori, un lycéen lambda doté d'une force surhumaine et membre du club de spiritisme, trouve un jour dans l'abri météo de son lycée une relique de rang S protégée par un sceau. Sasaki et Iguchi, ses amis du club, restent le soir au lycée pour inspecter la relique tandis que Yūji est à l'hôpital où son grand-père vient tout juste de décéder. La relique qu'ils ont trouvée est un des doigts de Ryōmen Sukuna, le plus puissant des fléaux. Ainsi, en libérant le doigt du sceau, Sasaki et Iguchi se font attaquer par de nombreux fléaux. Yūji, apprenant l'existence de ces derniers, retourne le plus vite possible au lycée en compagnie d'un exorciste pour sauver ses amis des griffes des fléaux. Lors d'un affrontement contre l'un d'eux, il décide d'ingurgiter la relique pour devenir plus puissant et ainsi sauver ses amis.</p>
<p>En avalant cette relique Ryōmen Sukuna prend possession du corps de Yūji, mais cela n'est que de courte durée car ce dernier arrive étonnamment à reprendre le contrôle sur Sukuna. Les exorcistes décident dans un premier temps de condamner à mort Yūji mais, grâce à l'intervention du plus puissant des exorcistes, Satoru Gojo, ils décident finalement d'utiliser Yūji comme réceptacle de Sukuna et de le tuer le jour où il aura avalé tous ses doigts. En effet, cela est la seule façon d'éliminer Sukuna une bonne fois pour toutes.
De là, démarre une aventure qui mènera Yūji à devenir un puissant exorciste pour sauver les innocents d'une mort indigne et à éliminer les fléaux de ce monde pour préserver l'humanité.</p><br>
</div>
<?php require("./inc/bas.inc.php");?>