<?php $titre = 'Admin'; ?>
<?php require_once('entete.php') ?>
<?php
if (isset($_SESSION['user'])) {
    if ($_SESSION['user']['type_compte'] == 'ADMIN') {
        // ICI
    } else {
        header('Location:profil.php');
    }
} else {
    header('Location:connexion.php');
}


$success = '';
$erreur = '';
?>
<section class="site_titre container-fluid">
    <h2>Administration</h2>
    <hr>
    <div class="row">
        <div class="col-md-3">
            <h3>Modification</h3>

            <?php require_once('modifier_profil_admin.php') ?>
        </div>
        <div class="col-md-9">

             
            <?php require_once('liste_profil.php') ?>


        </div>
    </div>
</section>
<br><br><br><br><br>
<a href="deconnexion.php" class="btn btn-primary mb-3"> Se deconnecter</a>

<?php require_once('footer.php') ?>