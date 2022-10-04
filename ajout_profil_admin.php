<!-- <h1> code d'ajout de profil</h1> -->
<?php
    if (isset($_POST['envoyer'])) {

        $new_produit = [
            'nom_du_personnage' => htmlspecialchars($_POST['nom_du_personnage']),
            'categorie' => htmlspecialchars($_POST['categorie']),
            'image' => htmlspecialchars($_POST['image']),
            'en_savoir_plus' => htmlspecialchars($_POST['en_savoir_plus']),
        ];

        $insertion = $database->prepare('INSERT INTO produits(nom_du_personnage, categorie, image, en_savoir_plus) VALUES (:nom_du_personnage, :categorie, :image, :en_savoir_plus)');
        $operation = $insertion->execute($new_produit);

        if ($operation) {
            $success = 'Profil ajouté!';
        }
    }
 ?>
 <form method="post" action="" enctype="multipart/form-data">
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
         <input required name="nom_du_personnage" maxlength="120" minlength="2" type="text" class="form-control" id="nom" placeholder="Ex: JOHN BOE">
         <label for="floatingInput">Nom du personnage</label>
     </div>
     <div class="form-floating mb-3">
         <select name="categorie" id="" class="form-control">
             <option value="FOOTBALLEURS">FOOTBALLEURS</option>
             <option value="ENTREPRENEURS">ENTREPRENEURS</option>
             <option value="DEVELOPPEURS">DEVELOPPEURS</option>
             <option value="TAEKWONDOISTES">TAEKWONDOISTES</option>
         </select>
         <label for="floatingInput">Categorie</label>
     </div>
     <div class="form-floating mb-3">
         <input required name="image" type="text"  class="form-control" id="mot_de_passe" placeholder="Ex: https://....">
         <label for="floatingPassword">Lien de l'image</label>
     </div>
     <div class="form-floating mb-3">
         <input type="text" name="en_savoir_plus" id="" >
         <label for="floatingPassword"> En savoir plus </label>
     </div>


     
     <button name="envoyer" class="w-100 btn btn-lg btn-primary" type="submit">Ajouter</button><br><br>
     
     <button name="e" class="w-100 btn btn-lg btn-primary" type="submit" onclick="window.location.href = 'liste_formulaire.php';">messages du formulaire de contact</button>
      
 </form>