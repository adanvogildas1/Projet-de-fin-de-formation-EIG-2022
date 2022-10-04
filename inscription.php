<!-- <h1>code du formulaire d'inscription inspiré de bostrap</h1> -->
 
<?php $titre = 'Inscription'; ?>
<?php require_once('entete.php') ?>
<?php
if (isset($_SESSION['user'])) {
    if ($_SESSION['user']['type_compte'] == 'ADMIN') {
        header('Location:admin.php');
    } else {
        header('Location:profil.php');
    }
}
?>
<?php

$success = '';
$erreur = '';

if (isset($_POST['envoyer'])) {

    $new_user = [
        'nom_prenom' => htmlspecialchars($_POST['nom_prenom']),
        'telephone' => htmlspecialchars($_POST['telephone']),
        'email' => htmlspecialchars($_POST['email']),
        'mot_de_passe' => hash('sha512', $_POST['mot_de_passe']),
    ];

    if ($_POST['mot_de_passe'] != $_POST['mot_de_passe_confirmation']) {
        $erreur = 'Mot de passe incorrectent !';
    } else {

        $insertion = $database->prepare('INSERT INTO utilisateurs(nom_prenom, email, telephone, mot_de_passe) VALUES (:nom_prenom, :email, :telephone, :mot_de_passe)');
        $operation = $insertion->execute($new_user);

        if ($operation) {
            $success = 'Inscription réussie!';
        }
    }
}

?>

<section class="site_titre container">
    <div class="row justify-content-center">
        <div class="col-md-6 mb-5">

            <form method="post" action="">
                <h1 class="h3 mb-3 fw-normal">Inscription</h1>
                <?php if ($success != '') :  ?>
                    <div class="alert alert-success">
                        <?= $success ?>
                    </div>
                <?php endif; ?>
                <?php if ($erreur != '') :  ?>
                    <div class="alert alert-danger">
                        <?= $erreur ?>
                    </div>
                <?php endif; ?>
                <div class="form-floating mb-3">
                    <input required name="nom_prenom" maxlength="120" minlength="2" type="text" class="form-control" id="nom" placeholder="Ex: John Doe">
                    <label for="floatingInput">Nom & Prénom</label>
                </div>
                <div class="form-floating mb-3">
                    <input required name="telephone" min="51000000" type="number" class="form-control" id="telephone" placeholder="Ex: 852858">
                    <label for="floatingInput">Téléphone</label>
                </div>
                <div class="form-floating mb-3">
                    <input required name="email" type="email" class="form-control" id="email" placeholder="name@example.com">
                    <label for="floatingInput">Adresse email</label>
                </div>
                <div class="form-floating mb-3">
                    <input required name="mot_de_passe" type="password" class="form-control" id="mot_de_passe" placeholder="Ex: 1Tuck2Ouf">
                    <label for="floatingPassword">Mot de passe</label>
                </div>
                <div class="form-floating mb-3">
                    <input required name="mot_de_passe_confirmation" type="password" class="form-control" id="mot_de_passe_confirmation" placeholder="Password">
                    <label for="floatingPassword">Confirmer Mot de passe</label>
                </div>


                <button name="envoyer" class="w-100 btn btn-lg btn-primary" type="submit">S'inscrire</button>
            </form>

        </div>
        <p>
            <a href="connexion.php">Vous avez déjà un compte? Connectez-vous?</a>
        </p>

    </div>
</section>

<?php require_once('footer.php') ?>