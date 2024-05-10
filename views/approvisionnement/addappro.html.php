<?php 

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ges-appro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class=" container-md  mt-5 ">
      <h1 class="text-center">Ajout approvissionement</h1>
    </div>
    <div class="container border p-4 mt-5 col-8 flex justify-content-around">
      <form class="row g-3">
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Date</label>
          <input type="date" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
          <label for="inputState" class="form-label">Fournisseur</label>
          <select id="inputState" class="form-select">
            <option selected>all</option>
            <?php foreach ($fournisseurs as $fournisseur) :?>
            <option value="<?= $fournisseur->idf?>"><?= $fournisseur->nomf?></option>
            <?php endforeach?>
          </select>
        </div>
        <div class="col-md-4">
          <label for="inputState" class="form-label">Categorie</label>
          <select id="inputState" class="form-select">
          <option selected></option>
          <?php foreach ($categories as $categorie) :?>
            <option value="<?= $categorie->idc?>"><?= $categorie->libellec?></option>
            <?php endforeach?>
          </select>
        </div>
        <div class="col-md-4">
          <label for="inputState" class="form-label">Produit</label>
          <select id="inputState" class="form-select">
          <option selected> </option>
          <?php foreach ($produits as $produit) :?>
            <option value="<?= $produit->idp?>"><?= $produit->libelle?></option>
            <?php endforeach?>
          </select>
        </div>
        <div class="col-md-4">
          <label for="inputState" class="form-label">Unite</label>
          <select id="inputState" class="form-select">
          <option selected></option>
          <?php foreach ($unites as $unite) :?>
            <option value="<?= $unite->idu?>"><?= $unite->libelle?></option>
            <?php endforeach?>
          </select>
        </div>
     
        <div class="col-md-4">
          <label for="inputCity" class="form-label">Quantite</label>
          <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="col-md-4">
          <label for="inputCity" class="form-label">Prix achat</label>
          <input type="text" class="form-control" id="inputCity">
        </div>
    
  
        <div class="col-md-2 mt-5 ">
          <button type="submit" class="btn btn-primary form-control ">Ok</button>
        </div>
       
      </form>
    </div>

  <div class="container">
    <table class="table mt-5">
      <thead>
        <tr>
          <th scope="col">Produit</th>
          <th scope="col">Unite</th>
          <th scope="col">Quantite</th>
          <th scope="col">Montant</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
      
      </tbody>
    </table>
  </div>
  <div class="container d-flex mt-5">
    <h1 class="border border-success col-2 ">Total=</h1>
              
  </div>
  <div class="container  d-flex justify-content-end mt-2">
    <button type="button" class="btn btn-primary col-2 ">Enregistrer</button>
  </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>