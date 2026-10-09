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
                <a href="/add/infoetudiant" class="btn btn-success btn-sm float-end">Add New</a>
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
                            <th>name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Matricule</th>
                            <th>Classe</th>
                            <th>Groupe</th>
                          
                            <th>Année Universitaire</th>
                            <th>Numéro CNE</th>
                            <th>Date de Naissance</th>
                            <th>Nationalité</th>
                            <th>Genre</th>
                            <th>Registration Date</th>
                            <th>Last Update</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(count($all_infoetudiants) > 0): ?>
                            <?php $__currentLoopData = $all_infoetudiants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($loop->iteration); ?></td>
                                    <td><?php echo e($item->name); ?></td>
                                    <td><?php echo e($item->email); ?></td>
                                    <td><?php echo e($item->phone_number); ?></td>
                                    <td><?php echo e($item->matricule); ?></td>
                                    <td><?php echo e($item->classe); ?></td>
                                    <td><?php echo e($item->groupe); ?></td>
                                   
                                    <td><?php echo e($item->annee_universitaire); ?></td>
                                    <td><?php echo e($item->cne); ?></td>
                                    <td><?php echo e($item->date_naissance); ?></td>
                                    <td><?php echo e($item->nationalite); ?></td>
                                    <td><?php echo e($item->genre); ?></td>
                                    <td><?php echo e($item->created_at); ?></td>
                                    <td><?php echo e($item->updated_at); ?></td>
                                    <td><a href="/edit4/<?php echo e($item->id); ?>" class="btn btn-primary btn-sm">Edit</a></td> 
                                    <td><a href="/delete4/<?php echo e($item->id); ?>" class="btn btn-danger btn-sm">Delete</a></td>
                                </tr>    
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="16">No User Found!</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\Users\X1\projet php\resources\views/infoetudiants.blade.php ENDPATH**/ ?>