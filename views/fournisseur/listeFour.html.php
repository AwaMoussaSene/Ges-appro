<?php 
$fournisseur=new Fournisseur();
$fournisseurs=$fournisseur->findAll();

if(isset($_POST["btnSave"])){
  $fournisseur->nomf=$_POST["nomf"];
  $fournisseur->telf=$_POST["telf"];
  $fournisseur->save();
  $fournisseurs=$fournisseur->findAll();

}
// var_dump($_POST);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class=" container-md  mt-5 ">
      <h1 class="text-center">Liste des fournisseurs</h1>
    </div>


    <div class="container col-10  d-flex  mt-5  justify-content-end">
        <button type="button" class="btn btn-success col-1" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Ajouter
        </button>
    </div>

  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Ajout fournisseur</h1>
          <button type="button" class="btn-close is-valid"  data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div id="div-error" class="invalid-feedback">
          
        </div>
        <div class="modal-body">
        <form action="" id="formf" method="post">
          <label for="">Nom:</label><br>
          <input type="text" class="w-100 p-2 rounded-3  border border-success border border-5 mt-3" id="name" placeholder=" " name="nomf" aria-label="Recipient's username" aria-describedby="button-addon2">
        </div>
        <div class="modal-body">
          <label for="">Telephone:</label><br>
          <input type="text" class="w-100 p-2 rounded-3  border border-success border border-5 mt-3" id="convert" placeholder=" " name="telf" aria-label="Recipient's username" aria-describedby="button-addon2">
        </div><div class="modal-footer">
          <input type="hidden" name="btnSave">
          <button type="button" class="btn btn-secondary" id="bntannuller-f" data-bs-dismiss="modal">Annuller</button>
          <button type="button" class="btn btn-success" id="bntf">Ajouter</button>
        </div>

        </form>
        
      </div>
    </div>
  </div>



    <div class="container mt-5">
    <table class="table table-bordered table-striped ">
      <thead class="table-success">
        <tr>
          <th scope="col">Nom</th>
          <th scope="col">Telephone</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($fournisseurs as $fournisseur):?>
        <tr>
          <td scope="row"><?= $fournisseur->nomf?></td>
          <td><?= $fournisseur->telf?></td>
        </tr>
        <?php endforeach?>
    
      </tbody>
    </table>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script>
      const formf=document.querySelector("#formf")
      const bntf=document.querySelector("#bntf")

      bntf.addEventListener("click",function(){
        formf.submit()
      })
    </script>
</body>
</html>