<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 11 CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <div class="card">
            <div class="card-header">
                Laravel 11 CRUD system 
             
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
                        <th>nom</th>
                        <th>Ville</th>
                        <th>Nom d'entreprise</th>
                        <th>Encadrant d'entreprise</th>
                        <th>Intitulé du stage</th>
                        <th>Durée du stage</th>
                        <th>Description du stage</th>
                        <th>Registration Date</th>
                        <th>Last Update</th>
                        <th colspan="2">Action</th>
                    </thead>
                    <tbody>
                        <?php if(count($all_ajouterstages) > 0): ?>
                            <?php $__currentLoopData = $all_ajouterstages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($loop->iteration); ?></td>
                                    <td><?php echo e($item->nom); ?></td>
                                    <td><?php echo e($item->ville); ?></td>
                                    <td><?php echo e($item->nom_entreprise); ?></td>
                                    <td><?php echo e($item->encadrant_entreprise); ?></td>
                                    <td><?php echo e($item->intitule_stage); ?></td>
                                    <td><?php echo e($item->duree_stage); ?></td>
                                    <td><?php echo e($item->description_stage); ?></td>
                                    <td><?php echo e($item->created_at); ?></td>
                                    <td><?php echo e($item->updated_at); ?></td>
                                    <td><a href="/edit5/<?php echo e($item->id); ?>" class="btn btn-primary btn-sm">Edit</a></td> 
                                    <td><a href="/delete5/<?php echo e($item->id); ?>" class="btn btn-danger btn-sm">Delete</a></td>
                                </tr>    
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="10">No Data Found!</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\Users\X1\projet php\resources\views/ajouterstages.blade.php ENDPATH**/ ?>