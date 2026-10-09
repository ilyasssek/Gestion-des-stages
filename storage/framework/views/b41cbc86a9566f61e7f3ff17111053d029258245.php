<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des étudiants</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo e(asset('css/listeetudiantt.css')); ?>">
</head>
<body>
    <h1>Liste des étudiants</h1>
    
    <?php if(session('infosetudiants')): ?>
    <div class="alert alert-info mt-3">
        <h4>Étudiants sélectionnés :</h4>
        <?php $__currentLoopData = session('infosetudiants'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $etudiant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p><strong>Nom : </strong><?php echo e($etudiant['name']); ?></p>
            <p><strong>Email : </strong><?php echo e($etudiant['email']); ?></p>
            <p><strong>Classe : </strong><?php echo e($etudiant['classe']); ?></p>
            <p><strong>Matricule : </strong><?php echo e($etudiant['matricule']); ?></p>
            <hr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php endif; ?>

                 
   
</body>
</html>
<?php /**PATH C:\Users\X1\projet php\resources\views/listeetudiant.blade.php ENDPATH**/ ?>