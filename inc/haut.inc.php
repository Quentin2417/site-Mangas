<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mangas-Zone<?php echo htmlspecialchars($title); ?></title>
    <link rel="stylesheet" href="<?php echo RACINE_SITE ?>public/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="<?php echo RACINE_SITE ?>inc/js/main.js"></script>
</head>
<body>
    <header>
        <div class="navbar">
            <div class="logo">
                <a class="logo" href="<?php echo RACINE_SITE; ?>/"><img  src="<?php echo RACINE_SITE; ?>./inc/img/logo/logo_site.png"></img></a>
            </div>
            <nav class="topnav" id="mytopnav">
                <?php
                if(UtilisateurConnecteEtAdmin()){
                    echo '<a href="' . RACINE_SITE . 'admin/gestion_membre.php">Gestion des membres</a>';
                    echo '<a href="' . RACINE_SITE . 'admin/gestion_produits.php">Gestion des produits</a>';
                    echo '<a href="' . RACINE_SITE . 'admin/gestion_commandes.php">Gestion des commandes</a>';
                    echo '<a href="' . RACINE_SITE . 'connexion.php?action=deconnexion">Se deconnecter</a>';
                } else {
                    if(UtilisateurConnecte()){ 
                        echo '<div class="bar-recherche">
                        <input type="text" class="search-input" placeholder="Rechercher...">
                        </div>';
                    }
                    if(UtilisateurConnecte()) {
                        echo '<a href="' . RACINE_SITE . 'profil.php">Profil</a>';
                        echo '<a href="' . RACINE_SITE . 'commande.php">Commande</a>';
                        echo '<a href="' . RACINE_SITE . 'panier.php">Panier</a>';
                        echo '<a href="' . RACINE_SITE . 'connexion.php?action=deconnexion">Se deconnecter</a>';
                    } else {
                        echo '<a href="' . RACINE_SITE . 'inscription.php">Inscription</a>';
                        echo '<a href="' . RACINE_SITE . 'connexion.php">Connexion</a>';
                    }}
                    ?>
                <a href="javascript:void(0);" class="icon" onclick="togglenav()">
                    <i class="fa fa-bars"></i>
                </a>
            </nav>
        </div>
            <racnav class="racnav" id="myracnav">
            <a href="<?php echo RACINE_SITE; ?>one_piece.php">One Piece</a>
            <a href="<?php echo RACINE_SITE; ?>dragon_ball.php">Dragon Ball</a>
            <a href="<?php echo RACINE_SITE; ?>naruto.php">Naruto</a>
            <a href="<?php echo RACINE_SITE; ?>demon_slayer.php">Demon Slayer</a>
            <a href="<?php echo RACINE_SITE; ?>HxH.php">Hunter X Hunter</a>
            <a href="<?php echo RACINE_SITE; ?>Snk.php">Attaque des Titans</a>
            <a href="<?php echo RACINE_SITE; ?>bleach.php">Bleach</a>
            <a href="<?php echo RACINE_SITE; ?>jujutsu_kaisen.php">Jujutsu Kaisen</a>
            <a href="javascript:void(0);" class="icon" onclick="ractogglenav()">
            <i class="fa fa-file"></i>
            </a>
        </racnav>
    </header>
    <section>
        <div class="conteneur">

