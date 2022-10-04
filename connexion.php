 
 <?php $titre = 'connexion'; ?>
<?php require_once('entete.php') ?>
<?php 
if(isset($_SESSION['user'])){
    if($_SESSION['user']['type_compte'] == 'ADMIN'){
        header('Location:admin.php');
    }else{
        header('Location:profil.php');
    }
} 
?>
<!-- <h1> CSS DE LA PAGE DE CONNEXION<h1>  -->
<style>
    .form-signin {
        max-width: 330px;
        padding: 15px;
    }

    .form-signin .form-floating:focus-within {
        z-index: 2;
    }

    .form-signin input[type="email"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    }

    .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }
</style>
<!-- <h1>CODE DE LA PAGE DE CONNEXION</h1> -->
<?php 
$erreur = '';

    if(isset($_POST['connexion'])){
        $connexion = [
            'email' => htmlspecialchars($_POST['email']),
            'mot_de_passe' => hash('sha512', $_POST['mot_de_passe'])
        ];

        $query = $database->prepare('SELECT * FROM utilisateurs WHERE email=:email AND mot_de_passe=:mot_de_passe');

        $query->execute($connexion);
        $user = $query->fetch();
       if(!$user ){
        $erreur = 'Vos identifiants ne correspondent pas !';
       }else{
            $_SESSION['user'] = [
                'email' =>  $user['email'],
                'nom_prenom' =>  $user['nom_prenom'],
                'telephone' =>  $user['telephone'],
                'type_compte' =>  $user['type_compte'],
                'date_ajout' =>  $user['date_ajout'],
            ];
            if($user['type_compte'] == 'ADMIN'){
                header('Location:admin.php');
            }else{
                header('Location:profil.php');
            }
       }
    }
?>
<section class="site_titre container">
    <div class="row justify-content-center">
        <div class="col-md-6 mb-5">
            <form method="post" action="">
                <h1 class="h3 mb-3 fw-normal">Connexion</h1>
                <?php if ($erreur != '') :  ?>
                    <div class="alert alert-danger">
                        <?= $erreur ?>
                    </div>
                <?php endif; ?>
                <div class="form-floating mb-3">
                    <input type="email" name="email" class="form-control" required id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Adresse email</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" name="mot_de_passe" class="form-control" required id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Mot de passe</label>
                </div>


                <button class="w-100 btn btn-lg btn-primary" name="connexion" type="submit">Se connecter</button>
            </form>
        </div>
        <p>
            <a href="inscription.php">Vous êtes nouveau? Créer un compte</a>
        </p>

    </div>
</section>
<?php require_once('footer.php') ?>

