<?php $titre = 'Accueil'; ?>
<?php require_once('entete.php') ?>
<section class="site_titre">
    <h2>BIENVENU A L'ACCUEIL DE NOTRE SITE WEB</h2>
    <hr>
    <p>Cette page est juste une aperçue d’image des personnes modelés de plusieurs domaines d’activité que vous pouvez suivre pour votre développement personnel. Pour en savoir plus sur ces personnages c’est-à-dire pourquoi ils ont choisi leur domaine, comment ils sont devenus célèbre, leur fortune, la vie luxueuse que vie ces personnages alors, vous être au bon endroit.
Cliquer sur le menu connexion pour vous connectez. Vous n’avez pas encore un compte ? inscrivez vous et connectez vous pour vous lancez. 
</p>
<h2>IMAGES DE QUELQUES PERSONNAGES</h2>
</section>
<section>
    <div>
   <?php $liste_accueil = $database->query('SELECT * FROM accueil')->fetchAll();?>

        <div>
            <?php foreach ($liste_accueil as $accueil) : ?>
                <div>
                <img src=" <?= $accueil['image'] ?>" alt="" class="image_profil" >
                <h3><?= $accueil['titre'] ?></h3>
                <p> <?= $accueil['paragraphe'] ?></p>
                <?php endforeach; ?>
            </div>
           
        


 <div class="voir_plus">
    <p>
        <a class="btn_achat" href="connexion.php">Voir plus de personnages</a>
    </p>
</div>  -->

<?php require_once('footer.php') ?>


