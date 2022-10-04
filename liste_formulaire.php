<?php $titre = 'formulaire'; ?>
<?php require_once('entete.php') ?>
<!-- <?php
    $liste_formulaire = $database->query("SELECT * FROM contacts")->fetchAll();
    ?> -->
 
 <div class="table-responsive mb-5 card">
     <h4>Liste des messages du formulaire de contact</h4>
     <table class="table table-bordered table-striped">
         <tr>
             <th>NOM ET PRENOM(S)</th>
             <th>OBJET</th>
             <th>EMAIL</th>
             <th >MESSAGE</th>
         </tr>

         <?php foreach ($liste_formulaire as $message) : ?>
             <tr>
                 <td><?= $message['firstname'] ?></td>
                 <td><?= $message['sujet'] ?></td>
                 <td><?= $message['email'] ?></td>
                 <td><?= $message['subject'] ?></td>
                  
         <?php endforeach; ?>
     </table>
 </div> <br><br>
 <button name="e" class="w-100 btn btn-lg btn-primary" type="submit" onclick="window.location.href = 'admin.php';">Retourner à la page d'ajout de profil</button>