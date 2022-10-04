<?php
    $id = intval($_GET['id']);
    $produit = $database->query("SELECT * FROM produits WHERE id=$id")->fetch();
    if (isset($_POST['envoyer'])) {

        $produit_mise_a_jour = [
            'id' => $produit['id'],
            'nom_du_personnage' => htmlspecialchars($_POST['nom_du_personnage']),
            'categorie' => htmlspecialchars($_POST['categorie']),
            'image' => htmlspecialchars($_POST['image']),
            'en_savoir_plus' => htmlspecialchars($_POST['en_savoir_plus']),
        ];

        $update = $database->prepare('UPDATE produits SET nom_du_personnage=:nom_du_personnage, categorie=:categorie, image=:image, en_savoir_plus=:en_savoir_plus WHERE id=:id');
        $operation = $update->execute($produit_mise_a_jour);

        if ($operation) {
            $success = 'Profil mise à jour !';
        }
    }
    ?>
 <form method="post" action="">
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
         <input required name="nom_du_personnage" value="<?= $produit['nom_du_personnage'] ?>" maxlength="120" minlength="2" type="text" class="form-control" id="nom" placeholder="Ex: HP">
         <label for="floatingInput">Nom du personnage</label>
     </div>
     <div class="form-floating mb-3">
         <select name="categorie" id="" class="form-control">
             <option <?= $produit['categorie'] == 'FOOTBALLEURS' ? 'selected': '' ?> value="FOOTBALLEURS">FOOTBALLEURS</option>
             <option <?= $produit['categorie'] == 'ENTREPRENEURS' ? 'selected': '' ?> value="ENTREPRENEURS">ENTREPRENEURS</option>
             <option <?= $produit['categorie'] == 'DEVELOPPEURS' ? 'selected': '' ?> value="DEVELOPPEURS">DEVELOPPEURS</option>
             <option <?= $produit['categorie'] == 'TAEKWONDOISTES' ? 'selected': '' ?> value="TAEKWONDOISTES">TAEKWONDOISTES</option>
         </select>
         <label for="floatingInput">Categorie</label>
     </div>
     <div class="form-floating mb-3">
         <input required name="image" value="<?= $produit['image'] ?>" type="text" class="form-control" id="mot_de_passe" placeholder="Ex: https://....">
         <label for="floatingPassword">Lien de l'image</label>
     </div>
     <div class="form-floating mb-3">
         <input class="form-control" name="en_savoir_plus" id="" rows="5"><?= $produit['en_savoir_plus'] ?></input>
         <label for="floatingPassword">En savoir plus</label>
     </div>



     <button name="envoyer" class="w-100 btn btn-lg btn-primary" type="submit">Mettre à jour</button>
 </form>

 