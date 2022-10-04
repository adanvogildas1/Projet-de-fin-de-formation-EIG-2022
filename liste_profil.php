<?php
    $liste_produits = $database->query("SELECT * FROM produits")->fetchAll();
    ?>
 <style>
     .img-zoom:hover {
         position: absolute;
         height: 200px !important;
         width: 200px !important;
         transition: 2s;
         z-index: 999999999999;

     }
 </style>
 <div class="table-responsive mb-5 card">
     <h4>Liste des profils</h4>
     <table class="table table-bordered table-striped">
         <tr>
             <th>#</th>
             <th>NOM DU PERSONNAGE</th>
             <th>CATEGORIE</th>
             <th>EN SAVOIR PLUS</th>
             <th >Ajout supprimé</th>
         </tr>

         <?php foreach ($liste_produits as $produit) : ?>
             <tr>
                 <td style="position:relative;">
                     <a style="position:relative;display:inline-block" target="_blank" href="<?= $produit['image'] ?>">
                         <img class="img-zoom" src="<?= $produit['image'] ?>" style="height: 50px;width:50px;border-radius:25px;" alt="">
                     </a>
                     <br>
                     <br>
                 </td>
                 <td><?= $produit['nom_du_personnage'] ?></td>
                 <td><?= $produit['categorie'] ?></td>
                 <td><?= $produit['en_savoir_plus'] ?></td>
                 <td style="display: flex">
                     <a href="modifier.php?id=<?= $produit['id'] ?>" class="btn btn-success"> <i class="bi bi-pen"></i> </a> &nbsp;&nbsp;&nbsp;
                     <a href="admin.php?sect=suppression&id=<?= $produit['id'] ?>" class="btn btn-danger"> <i class="bi bi-trash"></i> </a>
                 </td>
             </tr>
         <?php endforeach; ?>
     </table>
 </div>