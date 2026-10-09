<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des étudiants</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo e(asset('css/noterstage.css')); ?>">
</head>
<body>
    <h1 class="text-center my-4">Liste des étudiants</h1>
    
    <?php if(session('infosetudiants')): ?>
    <div class="container mt-3">
        <h4 class="mb-3">Étudiants sélectionnés :</h4>
        <?php $__currentLoopData = session('infosetudiants'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $etudiant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card mb-3">
                <div class="card-body">
                    <p><strong>Nom : </strong><?php echo e($etudiant['name']); ?></p>
                    <p><strong>Email : </strong><?php echo e($etudiant['email']); ?></p>
                    <p><strong>Classe : </strong><?php echo e($etudiant['classe']); ?></p>
                    <p><strong>Matricule : </strong><?php echo e($etudiant['matricule']); ?></p>
                    
                    <!-- Affichage de la note actuelle -->
                    <p><strong>Note actuelle : </strong>
                        <?php if(isset($etudiant['note'])): ?>
                            <?php echo e($etudiant['note']); ?>

                        <?php else: ?>
                            <span class="text-muted">Aucune note attribuée</span>
                        <?php endif; ?>
                    </p>
                    
                    <!-- Formulaire pour donner une note -->
                    <form action="/ajouter-note" method="POST" class="mt-3">
                        <?php echo csrf_field(); ?>
                        <div class="mb-2">
                            <label for="note-<?php echo e($etudiant['matricule']); ?>" class="form-label">Donner une nouvelle note :</label>
                            <input type="number" name="note" id="note-<?php echo e($etudiant['matricule']); ?>" class="form-control" placeholder="Note" required>
                        </div>
                        <input type="hidden" name="matricule" value="<?php echo e($etudiant['matricule']); ?>">
                        <button type="submit" class="btn btn-primary">Enregistrer la note</button>
                    </form>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php endif; ?>
</body>
</html>
<?php /**PATH C:\Users\X1\projet php\resources\views/noterstage.blade.php ENDPATH**/ ?>