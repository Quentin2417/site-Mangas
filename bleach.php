<?php require("./inc/init.inc.php");
$title = " | Bleach";?>
<?php require("./inc/haut.inc.php");?>
<div class="banniere" id=myban>
    <img class="banniere" src="./inc/img/couverture/banniere/ban_bleach.jpg" alt="">
</div>
</div><br>
<?php 
$categories_des_produits = executeRequete("SELECT nom, description, photo, taille, prix FROM produit WHERE mangas='M7'");
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
    <h1>Hisoire du manga Bleach  : </h1><br>
    <p>L'histoire de Bleach se déroule dans une version alternative de notre monde où des shinigami, les faucheurs des âmes3, protègent l'espèce humaine et les âmes des morts des hollows, forme bestiale des âmes perdues.

Cette lutte incessante, invisible aux yeux d'une très large majorité d'humains, se fait notamment à l'aide de Zanpakutō, des sabres spirituels liés à leurs maîtres qui peuvent se transformer.</p><br>

<p>Cette réalité alternative est constituée de plusieurs mondes parallèles parmi lesquels, outre la Terre, se trouvent entre autres la Soul Society, le monde des shinigamis (alias le paradis), le Hueco Mundo, le monde des hollows (les âmes torturées) et l'Enfer (là où vont les mauvais esprits qui ont accompli des actes néfastes dans leur vie terrestre).
Le récit commence en 2001 au Japon dans la ville fictive de Karakura. Ichigo Kurosaki, lycéen de 15 ans, arrive à voir, entendre et toucher les âmes des morts depuis qu'il est tout petit. Un soir, sa routine quotidienne vient à être bouleversée à la suite de sa rencontre avec une shinigami, Rukia Kuchiki, et la venue d'un monstre appelé hollow. Ce dernier étant venu dévorer les âmes de sa famille et la shinigami venue le protéger ayant été blessée par sa faute, Ichigo accepte de devenir lui-même un shinigami afin de les sauver.</p><br>

<p>Cependant, le transfert de pouvoir, censé être temporaire et partiel, est complet et ne s'achève pas. Ichigo est forcé de prendre la responsabilité de la tâche incombant à Rukia Kuchiki. Il commence donc la chasse aux hollows tout en protégeant les âmes humaines.

Le début est centré sur une chasse aux mauvais esprits relativement peu puissants, avec un simple sabre. L'histoire va peu à peu se diriger vers un vaste complot mystico-politique après l'apparition des premiers autres shinigami. Les batailles au sabre du commencement vont alors se métamorphoser en combats dantesques avec des armes aux pouvoirs surprenants et variés, et parfois aux proportions gigantesques.</p><br>
</div>
<?php require("./inc/bas.inc.php");?>