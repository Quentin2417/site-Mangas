<?php require("./inc/init.inc.php");
$title = " | SNK"?>
<?php require("./inc/haut.inc.php");?>
<div class="banniere" id=myban>
    <img src="./inc/img/couverture/banniere/ban_snk.jpg" alt="">
</div>
</div><br>
<?php 
$categories_des_produits = executeRequete("SELECT nom, description, photo, taille, prix FROM produit WHERE mangas='M6'");
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
    <h1>Hisoire du manga Attaque des titans  : </h1><br>
    <p>Plus de cent ans avant le début de l’histoire, des créatures géantes humanoïdes mangeuses d'hommes nommées Titans sont subitement apparues et ont presque anéanti l’humanité. Ces créatures géantes font habituellement entre trois et quinze mètres de haut, avec quelques exceptions comme le Titan colossal qui en mesure soixante1. Il semblerait que les Titans dévorent les humains par instinct et uniquement pour les tuer : en effet, ils ne possèdent pas de système digestif et n’ont pas besoin de se nourrir car ils puisent leur énergie dans la lumière du soleil. Néanmoins, certains sont actifs durant la nuit. Les Titans ont la peau dure, des capacités régénératrices et ne peuvent être tués que par une incision profonde à la base de la nuque.</p>
<p>Pour se protéger, l’humanité vit entourée par un système de trois murs concentriques de cinquante mètres de haut, distants les uns des autres d’une centaine de kilomètres3. Le mur extérieur est le Mur Maria, l’intermédiaire est le Mur Rose et le central est le Mur Sina. Afin de pouvoir se défendre plus facilement et efficacement, ainsi que pour réduire les coûts nécessaires à la défense, des bastions ont été construits. Ils permettent aux membres d’une garnison d’attirer les Titans à un même endroit du mur afin de les attaquer à l’aide de canons4,5. Grâce au relief et l’altitude grandissants à l’approche du mur central, de nombreux cours d’eau irriguent la zone dans son intégralité, ce qui permet à l’humanité de ne manquer ni de ressources minérales ni de gaz naturel6. Ces trois murs sont considérés comme sacrés par certains cultes, symbolisant trois déesses protectrices des humains.</p>
<p>La lutte contre les Titans est menée par une armée répartie en trois branches : le bataillon d'exploration, la garnison et les brigades spéciales. Le bataillon d’exploration effectue des expéditions de reconquête de territoires à l’extérieur des murs, là où se trouvent les Titans. Du fait du faible taux de réussite de ces missions, l'existence du bataillon d'exploration est souvent déplorée par le peuple. La garnison s’occupe de la protection des murs et des habitants des villes. Enfin, les brigades spéciales opèrent sous l’autorité royale dans des conditions de vie prospères et doivent maintenir la paix à l'intérieur des murs. Seules les dix premières recrues de chaque brigade d'entraînement reçoivent le privilège de demander une affectation au sein des brigades spéciales. Afin d’accéder au point faible des Titans, les soldats utilisent des lames et les équipements de manœuvres tridimensionnelles, leur permettant de se déplacer rapidement dans un espace à trois dimensions. Bien qu’ils permettent une grande mobilité à un utilisateur expérimenté, ils entraînent un grand risque de surcharge des muscles et nécessitent donc une condition physique particulière et un sens de l’équilibre maîtrisé8. Un entraînement dur est demandé aux soldats.</p>
<p>Il est révélé plus tard que les Titans sont apparus il y a environ 2 000 ans, lorsqu'une jeune femme nommée Ymir Fritz est devenue le premier Titan de l'histoire en obtenant le pouvoir du Titan originel. À la mort d'Ymir, son pouvoir a été divisé en neuf parties, donnant naissance à neuf Titans avec des capacités spéciales, appelés Titans primordiaux, chacun possesseur d'un pouvoir du Titan qui peut être transféré entre les membres du peuple d'Ymir, aussi appelé peuple eldien. Grâce à ce pouvoir, ce peuple a conquis le monde pour devenir le grand empire d'Eldia. La famille Fritz avec le pouvoir du Titan fondateur entre ses mains a gouverné le monde jusqu'à l'époque du 145e roi d'Eldia, nommé Karl Fritz qui, après la grande guerre des Titans, a décidé de mettre fin à l'empire d'Eldia, conduisant nombre de ses habitants vers une île appelée Paradis. Cependant, tous les Eldiens n'ont pas pu ou n'ont pas voulu le suivre sur l'île, et beaucoup sont restés sur le continent. Ils ont alors été soumis par l'empire nouvellement créé de Mahr qui les a placés dans des ghettos en les traitant comme des êtres inférieurs du fait des crimes passés de leur peuple. L'empire a par la suite exploité le peuple eldien en les utilisant notamment comme des armes de destruction massive pendant les guerres en les transformant de force en Titans.</p>
<p>De son côté, en atteignant Paradis, le roi Fritz utilisa le pouvoir du Titan originel également connu sous le terme d'Axe afin de construire les trois grands murs concentriques à partir de Titans de 50 mètres. Il a par la suite effacé la mémoire de la grande majorité de ses habitants, leur faisant oublier les guerres passées et l'existence de l'empire de Mahr. Toutes ces actions ont été menées dans le but supposé de les protéger des maux extérieurs et de les empêcher de quitter les murs, en leur faisant croire qu'ils étaient les derniers survivants de l'humanité. Fritz est resté le roi des murs et a changé le nom de famille de sa famille en Reiss. Ses descendants ont régné dans l'ombre en utilisant le pouvoir du Titan originel pendant plus de cent ans.</p><br>
</div>
<?php require("./inc/bas.inc.php");?>