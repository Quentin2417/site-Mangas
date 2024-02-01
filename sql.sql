-- Suppression de la base monecommerce si existante;
DROP DATABASE IF EXISTS ManagsZone;
-- Création de la base monecommerce si existante;
CREATE DATABASE IF NOT EXISTS MangasZone;
-- Utilisation de la base de données
USE MangasZone;

CREATE TABLE Utilisateur(
   id_membre INT auto_increment not null,
   nom VARCHAR(20) NOT NULL,
   prenom VARCHAR(20) NOT NULL,
   mot_de_passe VARCHAR(72) NOT NULL,
   email VARCHAR(50) NOT NULL,
   civilité enum('m','f') NOT NULL,
   ville VARCHAR(20) NOT NULL,
   code_postal INT NOT NULL,
   adresse VARCHAR(50),
   statue INT,
   PRIMARY KEY(id_membre)
);

CREATE TABLE commande(
   id_commande VARCHAR(50),
   id_produit INT NOT NULL,
   montant INT NOT NULL,
   date_enregistrement DATETIME NOT NULL,
   id_membre INT NOT NULL,
   PRIMARY KEY(id_commande),
   UNIQUE(id_membre),
   FOREIGN KEY(id_membre) REFERENCES utilisateur(id_membre)
);

CREATE TABLE mangas(
   id_mangas VARCHAR(20),
   nom_mangas VARCHAR(20) NOT NULL,
   PRIMARY KEY(id_mangas)
);

CREATE TABLE produit(
   idproduit INT,
   nom VARCHAR(50) NOT NULL,
   mangas VARCHAR(20) NOT NULL,
   description varchar(100) not NULL,
   taille VARCHAR(5),
   photo VARCHAR(250) NOT NULL,
   prix INT,
   stock INT,
   id_mangas VARCHAR(20) NOT NULL,
   PRIMARY KEY(idproduit),
   FOREIGN KEY(id_mangas) REFERENCES mangas(id_mangas)
);

CREATE TABLE details_commande(
   id_details_commande INT,
   quantite INT NOT NULL,
   prix INT NOT NULL,
   idproduit INT NOT NULL,
   id_commande VARCHAR(50) NOT NULL,
   PRIMARY KEY(id_details_commande),
   FOREIGN KEY(idproduit) REFERENCES produit(idproduit),
   FOREIGN KEY(id_commande) REFERENCES commande(id_commande)
);
-- contenu de la table `utilisateur`
insert into `utilisateur`(`id_membre`,`nom`,`prenom`,`mot_de_passe`,`email`,`civilité`,`ville`,`code_postal`,`adresse`, `statue`) values
(1,'Quint','Quentin','pilou','quintlodu62@orange.fr','m','paris',75008,'55 rue du faubourg saint-honoré',1),
(2,'Freville', 'Franck','Francky','franck_freville@gmail.com','m','vendin le vieil',62880,'15 rue de la bière',0),
(3,'Dambrine', 'Maxime','Robi', 'maxime_dambrine@hotmail.com','m','lens,',62300,'20 avenue vampire survivors',0),
(4,'Wattier', 'Arnaud','Bozo', 'arnaud_wattier@outlook.com','m','vendin le vieil',62880,'40 rue de bozo',0),
(5,'Allard', 'Anthony','Antho','anthony_allard@muscu.com','m','harnes',62440,'57 rue du thé',0),
(6,'Bastien', 'Baptiste','Commit', 'baptiste_bastien@lol.com','m','billy montigny',62420,'10 avenue du git commit',0),
(7,'Manier', 'Valentin','wattorex', 'valentin_manier@js.com','m','souchez',62153, '69 rue du dev web',0),
(8,'Czarnynoga', 'Quentin','lol', 'quentin_czarnynoga@chequemoica.com','m','sallaumine',62430,'25 rue de la rafale',0),
(9,'Jemoul', 'Yacine','Bonbon','yacine_jemoul@haribo.com','m','fouquieres les lens',62740,'47 avenue du dragibus',0),
(10,'Bachelar', 'Pierre','Retard','pierre_bachelar@aldi.com','m','harnes',62440,'69 rue du pet puant',0),
(11,'Legoff', 'Christophe','afci', 'christophe_legoff@formateur.com','m','lievin',62143,'01 rue de la formation',0),
(12,'admin', 'admin','admin', 'admin@mangas-zon.com','m','paris',75008,'55 rue du faubourg saint-honoré',1);


-- contenu de la table `mangas`
insert into `mangas` (`id_mangas`,`nom_mangas`) values
('M1','one_piece'),
('M2','dragon_ball'),
('M3','naruto'),
('M4','demon_slayer'),
('M5','hunter_x_hunter'),
('M6','attaque_des_titans'),
('M7','bleach'),
('M8','jujutsu_kaisen');

-- contenu de la table `produit` 
insert into `produit`(`idproduit`,`nom`,`description`,`mangas`,`taille`,`photo`,`prix`,`stock`,`id_mangas`) values
('11','Luffy Gear Fourth - Boundman -','Figurine de Luffy Gear 4, en pvc de 23cm','M1',23,'inc/img/img_figurines/one_piece/figurine_luffy.png',45,8,'M1'),
('12','Zoro - Sabre Haki -','Figurine de Zoro avec ses 3 sabres en haiki de l\armement, en pvc de 23cm','M1',23,'inc/img/img_figurines/one_piece/figurine_zoro.png',45,10,'M1'),
('13','Nami & Blizzard ','Figurine de Nami & Blizzard (Robby rivet), en pvc 23cm','M1',23,'inc/img/img_figurines/one_piece/figurine_nami.png',45,5,'M1'),
('14','Ussop - POP GREEN -','Figurine de Ussop sur socle, en pvc 23cm','M1',23,'inc/img/img_figurines/one_piece/figurine_ussop.png',45,6,'M1'),
('15','Sanji - Diable jambes -','Figurine de Sanji avec sa jambe enflammé, en pvc de 23cm','M1',23,'inc/img/img_figurines/one_piece/figurine_sanji.png',45,2,'M1'),
('16','Chopper - Full Transfrom -','Figurine de toute les tranformations de Chopper, en pvc de 80cm','M1',80,'inc/img/img_figurines/one_piece/figurine_chopper.png',950,5,'M1'),
('17','Robin - Cents Fleurs','Figurine Robin sur l\iles des hommes poissons, en pvc 23cm','M1',23,'inc/img/img_figurines/one_piece/figurine_robin.png',40,3,'M1'),
('18','Franky - Wano Mode -','Figurine de Francky au pays de Wano, en pvc de 23cm','M1',23,'inc/img/img_figurines/one_piece/figurine_franky.png',60,2,'M1'),
('19','Brook - Mode Esprit ','Figurine de Brook invocation des âmes, en pvc de 23cm','M1',23,'inc/img/img_figurines/one_piece/figurine_brook.png',50,1,'M1'),
('111','Sangoku - arc buu -','Figurine de Sangoku dans l\arc de buu, en pvc de 21cm','M2',21,'inc/img/img_figurines/dragon_ball/figurine_goku.png',45,8,'M2'),
('112','Vegeta - arc buu -','Figurine de vegeta dans l\arc de buu, en pvc de 21cm','M2',21,'inc/img/img_figurines/dragon_ball/figurine_vegeta.png',45,10,'M2'),
('113','Sangohan - Super Sayan 5 -','Figurine de Sangohan en super sayan 5 fan mode, en pvc de 18cm ','M2',18,'inc/img/img_figurines/dragon_ball/figurine_gohan.png',45,5,'M2'),
('114','Picoolo - Makankô Sappô -','Figurine de piccolo qui prépare sont Makankô Sappô, en pvc de 21cm','M2',21,'inc/img/img_figurines/dragon_ball/figurine_piccolo.png',45,6,'M2'),
('115','Freezer - Forme Final -','Figurine de Freezer sous sa forme final, en pvc de 21cm','M2',21,'inc/img/img_figurines/dragon_ball/figurine_freezer.png',45,2,'M2'),
('116','Cooler - Forme Final -','Figurine de Cooler sous sa forme final, en pvc de 21cm','M2',21,'inc/img/img_figurines/dragon_ball/figurine_cooler.png',45,5,'M2'),
('117','Cell - Forme Parfaite','Figurine de Cell sous sa forme parfaite, en pvc de 21cm','M2',21,'inc/img/img_figurines/dragon_ball/figurine_cell.png',45,3,'M2'),
('118','Buu - Forme Final(petit) -','Figurine de Buu petit lors de la bataille final, en pvc de 18cm','M2',18,'inc/img/img_figurines/dragon_ball/figurine_buu.png',45,2,'M2'),
('119','Broly - Dragon Ball Sper -','Figurine de Broly dans Drgaon Ball Super, en pvc de 21cm','M2',21,'inc/img/img_figurines/dragon_ball/figurine_broly.png',45,1,'M2'),
('211','Naruto - Kurama Mode -','Figurine de Naruto sous sa forme Kurama, en pvc de 23cm','M3',23,'inc/img/img_figurines/naruto/figurine_naruto.png',65,12,'M3'),
('212','Sasuke - Susano Mode -','Figurine de Sasuke sur son Susano, en pvc de 28cm','M3',28,'inc/img/img_figurines/naruto/figurine_sasuke.png',45,14,'M3'),
('213','Sakura - Sage Mode -','Figurine de Sakura en mode Sage avec Katsuyu, en pvc de 28cm','M3',28,'inc/img/img_figurines/naruto/figurine_sakura.png',35,19,'M3'),
('214','Itachi - Akatsuki -','Figurine d\Itachi à l\Akatsuki, en pvc de 23cm','M3',23,'inc/img/img_figurines/naruto/figurine_itachi.png',55,20,'M3'),
('215','Tobi - Juubi Mode','Figurine de Tobi mode juubi, en pvc de 28cm','M3',28,'inc/img/img_figurines/naruto/figurine_tobi.png',55,3,'M3'),
('216','Hiruzen - Battle Mode -','Figurine d\hiruzen pendant son combat avec Orochimaru, en pvc de 25cm','M3',25,'inc/img/img_figurines/naruto/figurine_hiruzen.png',40,10,'M3'),
('217','Orochimaru & Manda','Figurine d\Orochimaru et de Manda, en pvc de 28cm','M3',28,'inc/img/img_figurines/naruto/figurine_horochimaru.png',40,1,'M3'),
('218','Gaara - Hokage Mode -','Figurine du maitre hokage Gaara, en pvc de 23cm','M3',23,'inc/img/img_figurines/naruto/figurine_gaara.png',45,16,'M3'),
('219','Pain - Death of Jiraya -','Figurine qui représente la mort de Jiraya avec les 6 Pain, en pvc de 80cm','M3',80,'inc/img/img_figurines/naruto/figurine_pain.png',800,11,'M3'),
('311','Shinobu - Pouvoir de l\insecte -','Figurine de Shinobu mode combat, en pvc de 23cm','M4',23,'inc/img/img_figurines/demon_slayer/figurine_shinobu.png',35,21,'M4'),
('312','Akaza - Le demon aux 12 lunes démoniaques -','Figurine d\Akaza en combat, en pvc de 23cm','M4',23,'inc/img/img_figurines/demon_slayer/figurine_akaza.png',45,11,'M4'),
('313','Inosuke - L\homme Sanglier -','Figurine de l\homme sanglier Inosuke, en pvc de 23cm ','M4',23,'inc/img/img_figurines/demon_slayer/figurine_inosuke.png',40,31,'M4'),
('314','Nezuka - Bakkestu -','figurine de Nezuko et son pouvoir sanguinaire "Bakkestu", en pvc de 23cm','M4',23,'inc/img/img_figurines/demon_slayer/figurine_nezuka.png',25,61,'M4'),
('315','Sanemi - Pillier du vent -','Figurine du pourfendeur du vent Sanemi, en pcv de 18cm','M4',18,'inc/img/img_figurines/demon_slayer/figurine_sanemi.png',35,21,'M4'),
('316','Tanjiro - Technique "Valse"','Figurine de Tannjiro qui utilise sa technique feu Valse, en pvc de 18cm','M4',18,'inc/img/img_figurines/demon_slayer/figurine_tanjiro.png',50,12,'M4'),
('317','Zenistu - Technique "thunder" -','Figurine de Zenitsu qui lance son attaque "thunder", en pvc de 18cm','M4',18,'inc/img/img_figurines/demon_slayer/figurine_zenistu.png',60,51,'M4'),
('318','Tengen - Pillier du son -','Figurine de Tengen ancien ninja et pillier du son, en pvc de 18cm','M4',18,'inc/img/img_figurines/demon_slayer/figurine_tengen.png',45,12,'M4'),
('319','Tomioka - Le souffle de l\eau -','Figurine de Giyu Tomioka au pouvoir de l\eau, en pvc de 21cm ','M4',21,'inc/img/img_figurines/demon_slayer/figurine_tomiyoka.png',45,13,'M4'),
('411','Gon - Dark mode -','Figurine de Gon et son coté sombre, en pvc de 18cm','M5',18,'inc/img/img_figurines/HxH/figurine_gon.png',40,11,'M5'),
('412','Kirua - Le prodige assassin -','Figurine de Kirua quand il arrache le coeur du tueur en serie, en pvc de 18cm','M5',18,'inc/img/img_figurines/HxH/figurine_kirua.png',40,10,'M5'),
('413','Leolio - Le docteur -','Figurine de Leolio pendant l\examen "Hunter", en pvc de 21cm','M5',21,'inc/img/img_figurines/HxH/figurine_leolio.png',40,15,'M5'),
('414','Kurapika - Pupilles Ecarlates -','Figurine de kurapika l\homme au pupilles écarlates, en pvc de 25cm','M5',25,'inc/img/img_figurines/HxH/figurine_kurapika.png',55,15,'M5'),
('415','Hisoka - Le magicien -','Figurine d\Isoka le magicien en mode Bangee Gum, en pvc de 25cm','M5',25,'inc/img/img_figurines/HxH/figurine_hisoka.png',55,16,'M5'),
('416','Kuroro - Chrollo Lucifer -','Figurine du chef de la brigade fantôme Kuroro, en pvc de 21cm','M5',21,'inc/img/img_figurines/HxH/figurine_kuroro.png',25,17,'M5'),
('417','Meruem - Le roi des fourmis -','Figurine de Netoro le roi des fourmis, en pvc de 25cm','M5',25,'inc/img/img_figurines/HxH/figurine_meruem.png',50,18,'M5'),
('418','Netero - Le 12e président -','Figurine de Netoro lance son attaque des 100 bras, en pvc de 25cm','M5',25,'inc/img/img_figurines/HxH/figurine_netoro.png',50,1,'M5'),
('419','Uvogin & Kurapika','Figurine qui montre le combat entre Uvongin et Kurapika, en pvc de 45cm','M5',45,'inc/img/img_figurines/HxH/figurine_uvogin.png',80,19,'M5'),
('511','Annie - Titan Féminin -','Figurine d\Annie sous sa forme titan, en pvc de 28cm','M6',28,'inc/img/img_figurines/snk/figurine_annie.png',85,17,'M6'),
('512','Braun - Titan Cuirassé -','Figurine de Reiner sous sa forme titan, en pvc de 28cm','M6',28,'inc/img/img_figurines/snk/figurine_armored.png',100,16,'M6'),
('513','Sieg - Titan Bestial -','Figurine de Sieg jager sous sa forme titan, en pvc de 28cm','M6',28,'inc/img/img_figurines/snk/figurine_bestial.png',110,15,'M6'),
('514','Armin - Titan Colossal','Figurine d\Armin Arlet sous sa forme titan, en pvc de 28cm','M6',28,'inc/img/img_figurines/snk/figurine_colosse.png',150,11,'M6'),
('515','Eren - Bataillon d\exploration - ','Figurine de Eren Jager dans le bataillon d\exploration, en pvc 18cm','M6',18,'inc/img/img_figurines/snk/figurine_eren.png',50,21,'M6'),
('516','Erwin - Le commandant -','Figurine du commandant Erwin du bataillon d\exploration, en pvc de 18cm','M6',18,'inc/img/img_figurines/snk/figurine_erwin.png',45,31,'M6'),
('517','Livai - Bataille de Revelio -','Figurine de Livai caporal du bataillon d\exploration, en pvc de 18cm','M6',18,'inc/img/img_figurines/snk/figurine_livai.png',45,21,'M6'),
('518','Mikasa Ackerman','Figurine de Mikasa dans le bataillon d\exploration, en pvc de 18cm','M6',18,'inc/img/img_figurines/snk/figurine_mikasa.png',35,51,'M6'),
('519','Eren - Titan Assaillant -','Figurine de Eren Jager sous sa forme titan, en pvc 25cm','M6',25,'inc/img/img_figurines/snk/figurine_titan.png',50,11,'M6'),
('611','Aizen -5e Capitaine -','Figurine d\Aizen le 5e Capitaine des 13 divisions, en pvc de 18cm','M7',18,'inc/img/img_figurines/bleach/figurine_aizen.png',45,13,'M7'),
('612','Hitsugaya - Bankai mode -','Figurine d\Hitsugaya en mode Bankai, en pvc de 20cm','M7',20,'inc/img/img_figurines/bleach/figurine_hitsugaya.png',45,13,'M7'),
('613','Tia hallibel - Hollow mode -','Figurine de Tia en mode Hollow, en pvc de 21cm','M7',21,'inc/img/img_figurines/bleach/figurine_tia.png',50,15,'M7'),
('614','Rangiku Matsumoto','Figurine du lieutenant de la 10e division et du Gotei 13 Rangiku, en pvc de 18cm','M7',18,'inc/img/img_figurines/bleach/figurine_rangiku.png',45,16,'M7'),
('615','Renji Abarai','Figurine du lieutenant de la 6ème Division du Gotei 13 Renji, en pvc de 18cm','M7',18,'inc/img/img_figurines/bleach/figurine_renji.png',50,17,'M7'),
('616','Yamamoto - Le fondateur -','Figurine du légendaire fondateur du Gotei 13 Yamamoto, en pvc de 21cm','M7',21,'inc/img/img_figurines/bleach/figurine_yamamoto.png',35,19,'M7'),
('617','Zaraki - Le puissant -','Figurine du Capitain de la 11e division du Gotei 13 Zaraki, en pvc de 21cm','M7',21,'inc/img/img_figurines/bleach/figurine_zaraki.png',50,16,'M7'),
('618','Kuchiki Byakuya ','Figurine du capitain de la 6e division du Gotei 13 Kuchiki, en pvc de 25cm','M7',18,'inc/img/img_figurines/bleach/figurine_kuchiki.png',30,14,'M7'),
('619','Ichigo - Hollow mode -','Figurine d\Ichigo en mode Hollow, en pvc de 18cm','M7',18,'inc/img/img_figurines/bleach/figurine_ichigo.png',45,13,'M7'),
('711','Geto - L\exorciste -','Figurine de l\exorciste Geto, en pvc de 25cm','M8',25,'inc/img/img_figurines/jujutsu_kaisen/figurine_geto.png',50,10,'M8'),
('712','Itadori - Demon Sukuna -','Figurine de l\hote du demon Sakuna, en pvc de 18cm','M8',18,'inc/img/img_figurines/jujutsu_kaisen/figurine_itadori.png',45,11,'M8'),
('713','Kento - Le professeur -','Figurine du professeur de classe kento, en pvc de 18cm','M8',18,'inc/img/img_figurines/jujutsu_kaisen/figurine_kento.png',40,8,'M8'),
('714','Maki - La spécialiste -','Figurine de la spécialiste en reliques occultes maki, en pvc de 18cm','M8',25,'inc/img/img_figurines/jujutsu_kaisen/figurine_maki.png',30,1,'M8'),
('715','Megumi - Le roi des fléaux -','Figurine du roi des fléaux Fushigoro Megumi, en pvc de 21cm','M8',21,'inc/img/img_figurines/jujutsu_kaisen/figurine_megumi.png',45,6,'M8'),
('716','Nobara - Occulte -','Figurine de Nobora dit l"Occulte", en pvc de 21cm','M8',21,'inc/img/img_figurines/jujutsu_kaisen/figurine_nobara.png',45,41,'M8'),
('717','Panda - L\Incarnation -','Figurine de l\incarnation de Yaga "Panda", en pvc de 23cm','M8',23,'inc/img/img_figurines/jujutsu_kaisen/figurine_panda.png',45,2,'M8'),
('718','Satoru - Rikugan -','Figurine du 6e oeil Satoru forme Rikugan, en pvc de 18cm','M8',18,'inc/img/img_figurines/jujutsu_kaisen/figurine_satoru.png',50,10,'M8'),
('719','Yuta - L\étudiant -','Figurine de Yuta l\exorciste de classe S, en pvc de 25cm ','M8',25,'inc/img/img_figurines/jujutsu_kaisen/figurine_yuta.png',45,0,'M8');



-- contenu de la table `commande` 
insert into `commande`(`id_commande`,`id_produit`,`montant`,`date_enregistrement`,`id_membre`) values
('C1', 3, 250.50, '2023-09-08 17:13:25',1),
('C2', 4, 8.00, '2023-09-09 14:15:00', 2),
('C3', 5, 25.00, '2023-09-09 15:30:00', 3),
('C4', 6, 30.00, '2023-09-09 16:45:00', 4),
('C5', 7, 12.00, '2023-09-09 17:30:00', 5);

-- contenu de la table `details_commande`
insert into `details_commande`(`id_details_commande`,`quantite`,`prix`,`idproduit`,`id_commande`) values
(1, 1,250.50, 11, 'C1'),
(2, 2, 16.00, 14, 'C2'),
(3, 1, 25.00, 15, 'C3'),
(4, 3, 90.00, 16, 'C4'),
(5, 2, 24.00, 17, 'C5');



