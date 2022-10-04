<!-- <body>
<div style="background-image: url('https://marketplace.canva.com/EAElTz-uILo/1/0/1600w/canva-jaune-et-bleu-vert-plage-montage-saisonnier-ordinateur-de-bureau-fond-d%27%C3%A9cran-xfJiqVRuof0.jpg');">
</body> -->
<?php $titre = 'Contact'; ?>
<?php require_once('entete.php') ?>
<section class="site_titre">
<?php

$succes = '';
$erreur= '';
     
if (isset($_POST['send'])) {

    $new_for = [
        'firstname' => htmlspecialchars($_POST['firstname']),
        'sujet' => htmlspecialchars($_POST['sujet']),
        'email' => htmlspecialchars($_POST['email']),
        'subject' => htmlspecialchars($_POST['subject']),
    ];
    
    $insertion = $database->prepare('INSERT INTO contacts (firstname, sujet, email,subject) VALUES (:firstname, :sujet, :email, :subject)');
    $operation = $insertion->execute($new_for);

    if ($operation) {
        $succes = ' votre message a été envoyé';
        $erreur= 'message non envoyé';
             
    }
    }
?>
       
<h1>Formulaire de contact</h1>
  <form method="POST" action= "">
    <label  for="fname">Nom & prénom</label>
    <input  type="text" id="firstname" required name="firstname" placeholder="Votre nom et prénom">

    <label  for="sujet">Sujet</label>
    <input type="text" id="sujet" required name="sujet" placeholder="L'objet de votre message">

    <label  for="emailAddress">Email</label>
    <input id="emailAddress" type="email" required name="email" placeholder="Votre email">


    <label  for="subject">Message</label>
    <textarea id="subject" required name="subject" placeholder="Votre message" style="height:200px"></textarea>

    <input type="submit" value="envoyer" name="send" id= "send">
  </form>
  <!-- récupérayion du message du formilaire de contact dans une adresse email client  -->

  <style>
    body {font-family: Arial, Helvetica, sans-serif;
  padding: 0px;}

input[type=text], textarea, input[type=email] {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  margin-right: 0px;
  margin-left: 0px;
  resize: vertical;
}
label{margin-right: 0px;
  margin-left: 0px;
  width: 100%;}

input[type=submit] {
  background-color: #1255a2;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #1872D9;
}

.container {
  /* Ajouter box-sizing */
  box-sizing : border-box;
  border-radius:5px;
  background-color:#f2f2f2;
  padding:20px;
  width: 100%;
  /* redéfinition 400 + 2*20 */
  max-width: 440px;
  margin:0 auto;
}
h1  {
  color: #ffc800;
  width: 100%;
}
  </style>

<br>
 

    