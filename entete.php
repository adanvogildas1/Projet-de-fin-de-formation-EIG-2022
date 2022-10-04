<?php
session_start();
$driver = 'mysql';
$host = 'localhost';
$dbname = 'projet_de_fin_de_formation';
$charset = 'utf8';
$user_name = 'root';
$user_password = '';

try {
    $database = new PDO("$driver:host=$host;dbname=$dbname;charset=$charset", $user_name, $user_password);
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "
            <img style='width:100%;height:100vh;' src='https://i0.wp.com/learn.onemonth.com/wp-content/uploads/2017/08/1-10.png?fit=845%2C503&ssl=1' />
        ";
    die();
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= isset($titre) ? $titre : 'Accueil' ?> </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="image/(25).jpg">
    

</head>

<body>
    <!-- <h1>Heder de ma page web</h1> -->
    <header>
    <div class="header">     
                    <a href="index.php" class="logo" class="<?= $titre == 'Accueil' ?  'active' : ''  ?>" class=>Accueil</a>
                    <div class="header-right">
                    <a href="contact.php" class="<?php echo $titre == 'Contact' ?  'active' : ''  ?>">Contact</a>
                    <a href="a_propos.php"  class="<?php echo $titre == 'Apropos' ?  'active' : ''  ?>" >A propos</a>
                    <a href="connexion.php" class="<?php echo $titre == 'connexion' ?  'active' : ''  ?>">Connexion</a>
                    </div>
                 
    </div>
    </header>
   
    <?php
   


// Titre: partie utilisée pour la connexion à la base de donnée dans une fonction

   function affiche_produit($produit)
   {
       return '
           <div class="produit">
               <div class="parent_image animate__animated animate__swing" style="overflow:hidden">
                   <img class="image_produit" src="' . $produit['image'] . '"alt="">
               </div>
               <div class="parent_titre">
                   <h1 class="titre_produit">' . ucfirst($produit['nom_du_personnage']) . '</h1>
               </div>
               <div class="parent_btn">
                   <a " target="_blank" class="btn_achat" href="' . $produit['en_savoir_plus']  . '?id=' . $produit['id'] . '" >
                   EN SAVOIR PLUS SUR  ' . $produit['nom_du_personnage'] . '</a>
               </div>
           </div>
        ';
   }
 


   ?>
   
   

 

 

    