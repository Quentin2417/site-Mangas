<?php require("./inc/init.inc.php");
$title = " | Dragon Ball";?>
<?php require("./inc/haut.inc.php");?>
<div class="banniere" id=myban>
    <img src="./inc/img/couverture/banniere/ban_dbz.jpg" alt="">
</div>
</div><br>
<?php 
$categories_des_produits = executeRequete("SELECT nom, description, photo, taille, prix FROM produit WHERE mangas='M2'");
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
    <h1>Histoire du manga Dragon Ball  : </h1><br>
    <p>L'histoire de Dragon Ball suit la vie de Son Goku, un garçon à la queue de singe inspiré du conte traditionnel chinois La Pérégrination vers l'Ouest. Son Goku est un jeune garçon simple d'esprit et pur doté d'une queue de singe et d'une force extraordinaire. Il vit seul, après la mort de son grand-père adoptif, sur une montagne et en pleine nature, dans un paysage ayant les caractéristiques d'une forêt sauvage. Un jour, il rencontre Bulma, une jeune fille de la ville, très intelligente mais immature et impulsive. Elle est à la recherche des sept boules de cristal légendaires appelées Dragon Balls. Dispersées sur la Terre, ces Dragon Balls, une fois réunies, font apparaître Shenron, le Dragon sacré, un être immatériel qui exauce le souhait de la personne l'ayant invoqué. Son Goku accepte d'aider Bulma car son grand-père adoptif Son Gohan lui avait dit d'être gentil avec les filles ; de plus, le vieil homme lui avait confié l'une des sept boules (celle à quatre étoiles), que le jeune garçon a perdue et souhaite retrouver en son souvenir. Au cours de leur parcours initiatique, ils font de nombreuses rencontres. Son Goku, qui n'était jamais sorti de sa forêt, est amené à suivre un apprentissage auprès de maîtres comme Maître Muten Roshi ou Maître Karin et à participer à plusieurs championnats du monde d'arts martiaux (Tenkaichi Budokai). Il mène de nombreuses batailles et finit par devenir le plus puissant artiste martial de l'univers. Il n’est cependant pas sans aide : le manga présente une vaste galerie d'artistes martiaux, alliés ou d'ennemis, fournissant le conflit qui anime chaque arc de la saga.</p><br>
<p>La série Dragon Ball Z se différencie de Dragon Ball par son accent mis sur les combats opposant Son Goku et ses amis à des ennemis toujours plus puissants et acharnés dans leur conquête du monde. Dans Dragon Ball, le personnage principal Son Goku apparaît comme un enfant surdoué des arts martiaux qui lutte contre des personnages le plus souvent sans scrupules et méchants, mais qui reste dans une certaine mesure à dimension humaine. Dans Dragon Ball Z, à la manière d'un roman initiatique, Son Goku devient adulte, tombe amoureux en épousant ChiChi et a des enfants, mais surtout il affronte de nouveaux ennemis surpuissants tels que Vegeta, Freezer, Cell ou encore Boo. Les combats ne se déroulent plus seulement sur Terre mais aussi et souvent sur des planètes lointaines, notamment celle des Nameks et celle des Kaïo Shins.</p><br>    
    </p>
</div>
<?php require("./inc/bas.inc.php");?>