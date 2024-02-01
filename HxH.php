<?php require("./inc/init.inc.php");
$title = " | Hunter X Hunter";?>
<?php require("./inc/haut.inc.php");?>
<div class="banniere" id=myban>
    <img src="./inc/img/couverture/banniere/ban_HxH.jpg" alt="">
</div>
</div><br>
<?php 
$categories_des_produits = executeRequete("SELECT nom, description, photo, taille, prix FROM produit WHERE mangas='M5'");
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
    <h1>Hisoire du manga hunter X Hunter  : </h1><br>
    <p>Gon Freecss est un jeune garçon âgé de 12 ans, rêvant de devenir hunter (chasseur en anglais). Les hunters sont des citoyens d'élite autorisés à faire quasiment tout ce qu'ils souhaitent sur simple présentation de leur licence : ils peuvent ainsi acquérir gratuitement tout objet à la vente sur les fonds de l'association, réquisitionner tout véhicule, logement et outil pour leur travail et sont de facto habilités à exercer tous les métiers du monde, pouvant tout aussi bien devenir chasseurs de primes, chefs-cuisinier, archéologues, zoologues, justiciers ou consultants dans divers domaines. Son père, Ging Freecss, qu'il ne connaît pas directement, est considéré comme un des plus grands hunters de son temps. C'est aussi pour le retrouver que Gon veut devenir hunter.</p><br>

<p>Cependant l'examen de hunter, qui a lieu chaque année, est extrêmement difficile et périlleux. On dit qu'un candidat sur 10 000 arrive sur le lieu des épreuves et qu'un seul candidat tous les trois ans devient hunter à sa première tentative. Durant les épreuves, il n'est pas rare d'être blessé, voire être tué par des monstres, des pièges ou même d'autres concurrents…</p>

<p>Au cours de cet examen, Gon va rencontrer différents personnages, aussi bien ami qu'ennemi : Kurapika, qui participe à l'examen Hunter pour devenir un Hunter de la Blacklist et dont le seul objectif est de venger son clan, le clan Kuruta, assassiné par la Brigade fantôme et tenter de récupérer les yeux de son clan, les pupilles écarlates ; Léolio, dont le but avoué est d'acquérir de l'argent pour financer ses études de médecine ; Killua, qui a le même âge que Gon, est le fils d'une famille d'assassins d'élite, la famille Zoldik, ne souhaite pas poursuivre la voie de sa famille, participant à cet examen par simple amour du défi ; Hisoka, dont la grande passion est le combat contre des guerriers très puissants ; ainsi que beaucoup d'autres…

La force de Gon n'est pas que physique : son charisme, sa pureté, sa gentillesse, sa grande générosité et surtout son incroyable capacité à attirer la sympathie l'aident souvent à se sortir des situations les plus périlleuses.</p><br>
</div>    
<?php require("./inc/bas.inc.php");?>