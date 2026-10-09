<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel User List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                Liste des utilisateurs
            </div>
            <?php if(Session::has('success')): ?>
                <span class="alert alert-success p-2"><?php echo e(Session::get('success')); ?></span>
            <?php endif; ?>
            <?php if(Session::has('fail')): ?>
                <span class="alert alert-danger p-2"><?php echo e(Session::get('fail')); ?></span>
            <?php endif; ?>
            <div class="card-body">
                <table class="table table-sm table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Nom complet</th>
                            <th>Email</th>
                            <th>Numéro de téléphone</th>
                            <th>Date d'enregistrement</th>
                            <th>Dernière mise à jour</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(count($all_listes) > 0): ?>
                            <?php $__currentLoopData = $all_listes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($loop->iteration); ?></td>
                                    <td><?php echo e($item->name); ?></td>
                                    <td><?php echo e($item->email); ?></td>
                                    <td><?php echo e($item->phone_number); ?></td>
                                    <td><?php echo e($item->created_at); ?></td>
                                    <td><?php echo e($item->updated_at); ?></td>
                                </tr>    
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="6" class="text-center">Aucun utilisateur trouvé !</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                
<?php /**PATH C:\Users\X1\projet php\resources\views/espacestudent.blade.php ENDPATH**/ ?>