
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
      <h1 class="text-center">Liste des unites</h1>
    </div>
    <div class="container  d-flex justify-content-end mt-5">
    <button type="button" class="btn btn-primary  ">Ajouter</button>
  </div>
    <div class="container mt-2">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">id unite</th>
          <th scope="col">nom unite</th>

        </tr>
      </thead>
      <tbody>
        <?php 
       require_once("modele/Unite.php") ;
       $unite=new Unite();
       $unites=$unite->findAll();
        ?>
        <?php foreach ($unites as $unite):?>
        <tr>
          <td scope="row"><?= $unite->idu?></td>
          <td><?= $unite->libelle?></td>
        </tr>
        <?php endforeach?>
    
      </tbody>
    </table>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>