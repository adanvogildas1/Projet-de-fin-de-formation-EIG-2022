<?php $titre = 'profil'; ?>
<?php require_once('entete.php') ?>
<!-- titre: partie utilisée pour se connecter à la base de donnée -->
<?php

$profil_footballeurs = $database->query('SELECT * FROM produits  WHERE categorie="FOOTBAllEURS" ')->fetchAll();
$profil_entrepreneurs = $database->query('SELECT * FROM produits  WHERE categorie="ENTREPRENEURS" ')->fetchAll();
$profil_developpeurs = $database->query('SELECT * FROM produits  WHERE categorie="DEVELOPPEURS" ')->fetchAll();
$profil_taekwondoistes = $database->query('SELECT * FROM produits  WHERE categorie="TAEKWONDOISTES" ')->fetchAll();

?>
<section class="site_titre">
    <h1>profil</h1> <br>
<p>Vous trouverez ci-dessous une liste de personnes les plus inspirantes classées par domaine d'activité.</p>
    <p>Liste des footballeurs</p>
    <hr>
</section>
<section class="produits">
    <?php foreach ($profil_footballeurs as $produit) : ?>
        <?= affiche_produit($produit) ?>
    <?php endforeach ?>
</section>
<section class="site_titre">
    <p>Liste des entrepreneurs </p>
    <hr>
</section>
<section class="produits">
    <?php foreach ($profil_entrepreneurs as $produit) : ?>
        <?= affiche_produit($produit) ?>
    <?php endforeach ?>
</section>
<section class="site_titre">
    <p>Liste des développeurs</p>
    <hr>
</section>
<section class="produits">
    <?php foreach ($profil_developpeurs as $produit) : ?>
        <?= affiche_produit($produit) ?>
    <?php endforeach ?>
</section>
<section class="site_titre">
    <p>Liste des taekwondoistes</p> 
    <hr>
</section>
<section class="produits">
    <?php foreach ($profil_taekwondoistes as $produit) : ?>
        <?= affiche_produit($produit) ?>
    <?php endforeach ?>
     
</section>
<a href="deconnexion.php" class="btn btn-primary mb-3" style="margin-left: 0%"; style = margin-bot: 0%;> Se deconnecter</a>

<?php require_once('footer.php') ?>
