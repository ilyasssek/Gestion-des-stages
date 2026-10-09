
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un stage</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/Etudiant.css')); ?>">
</head>
<body>
<div class="signup-container">
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Ville</label>
    <input type="ville" class="form-control" id="exampleInputEmail1" aria-describedby="villeHelp" placeholder="Entrer la ville">
    <small id="villeHelp" class="form-text text-muted">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nom de l'entreprise</label>
    <input type="entreprise" class="form-control" id="exampleInputEmail1" aria-describedby="entrepriseHelp" placeholder="Entre le nom d'entreprise">
    <small id="entrepriseHelp" class="form-text text-muted">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Encadrant de l'entreprise</label>
    <input type="Encadrant" class="form-control" id="exampleInputEmail1" aria-describedby="EncadrantHelp" placeholder="Entrer nom d'Encadrant">
    <small id="EncadrantHelp" class="form-text text-muted">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Intitule du stage</label>
    <input type="Intitule" class="form-control" id="exampleInputEmail1" aria-describedby="IntituleHelp" placeholder="Entrer Intitule">
    <small id="IntituleHelp" class="form-text text-muted">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Description du stage</label>
    <input type="Description" class="form-control" id="exampleInputPassword1" placeholder="Description">
  </div>
  
  <button type="submit" class="btn btn-primary">Envoyer</button>
</form>
</div> 
</body>
</html>

<?php /**PATH C:\Users\X1\projet php\resources\views/ajouterstage.blade.php ENDPATH**/ ?>