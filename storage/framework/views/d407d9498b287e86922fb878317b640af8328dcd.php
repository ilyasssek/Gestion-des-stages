<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="<?php echo e(asset('css/deposerrapport.css')); ?>">

</head>
<body>
<div class="main-content">
  <h2>Déposer vos documents</h2>
  <form>
    <!-- Déposer le rapport -->
    <div class="form-group">
      <label for="rapport">Déposer le rapport</label>
      <input type="file" class="form-control-file" id="rapport">
    </div>

    <!-- Déposer la présentation -->
    <div class="form-group">
      <label for="presentation">Déposer la présentation</label>
      <input type="file" class="form-control-file" id="presentation">
    </div>

    <!-- Déposer la fiche d'évaluation -->
    <div class="form-group">
      <label for="evaluation">Déposer la fiche d'évaluation</label>
      <input type="file" class="form-control-file" id="evaluation">
    </div>

    <!-- Déposer l'attestation du stage -->
    <div class="form-group">
      <label for="attestation">Déposer l'attestation du stage</label>
      <input type="file" class="form-control-file" id="attestation">
    </div>

    <!-- Bouton Envoyer -->
    <button type="submit" class="btn btn-primary">Envoyer</button>
  </form>
</div>

</body>
</html><?php /**PATH C:\Users\X1\projet php\resources\views/deposerrapport.blade.php ENDPATH**/ ?>