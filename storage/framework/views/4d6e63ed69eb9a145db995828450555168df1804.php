<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 11 Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <div class="card">
            <div class="card-header">
                Laravel 11 CRUD system 
                <a href="/add/deposerrapport" class="btn btn-success btn-sm float-end">Add New</a>
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
                        <th>S/N</th>
                        <th>Déposer Rapport</th> <!-- Changed column name -->
                        <th>Déposer Présentation</th> <!-- Changed column name -->
                        <th>Déposer Fiche d'Évaluation</th> 
                        <th>Déposer attestation du stage</th><!-- Changed column name -->
                        <th>Date d'Inscription</th>
                        <th>Dernière Mise à Jour</th>
                        <th colspan="2">Action</th>
                    </thead>
                    <tbody>
                        <?php if(count($all_deposerrapports) > 0): ?>
                            <?php $__currentLoopData = $all_deposerrapports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($loop->iteration); ?></td>
                                    <td><?php echo e($item->deposer_rapport); ?></td> <!-- Changed column name -->
                                    <td><?php echo e($item->deposer_presentation); ?></td> <!-- Changed column name -->
                                    <td><?php echo e($item->deposer_fiche_evaluation); ?></td>
                                    <td><?php echo e($item->deposer_attestation_stage); ?></td> <!-- Changed column name -->
                                    <td><?php echo e($item->created_at); ?></td>
                                    <td><?php echo e($item->updated_at); ?></td>
                                    <td><a href="/edit6/<?php echo e($item->id); ?>" class="btn btn-primary btn-sm">Edit</a></td> 
                                    <td><a href="/delete6/<?php echo e($item->id); ?>" class="btn btn-danger btn-sm">Delete</a></td>
                                </tr>    
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="8">No User Found!</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\Users\X1\projet php\resources\views/deposerrapports.blade.php ENDPATH**/ ?>