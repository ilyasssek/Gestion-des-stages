<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Stage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">Edit Stage</div>
            <?php if(Session::has('fail')): ?>
                <span class="alert alert-danger p-2"><?php echo e(Session::get('fail')); ?></span>
            <?php endif; ?>
            <div class="card-body">
                <form action="<?php echo e(route('Editajouterstage')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="ajouterstage_id" value="<?php echo e($ajouterstage->id); ?>">
                    <div class="mb-3">
                        <label for="ville" class="form-label">Ville</label>
                        <input type="text" name="ville" value="<?php echo e($ajouterstage->ville); ?>" class="form-control" id="ville" placeholder="Enter Ville">
                        <?php $__errorArgs = ['ville'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="mb-3">
                        <label for="nom_entreprise" class="form-label">Nom d'Entreprise</label>
                        <input type="text" name="nom_entreprise" value="<?php echo e($ajouterstage->nom_entreprise); ?>" class="form-control" id="nom_entreprise" placeholder="Enter Nom d'Entreprise">
                        <?php $__errorArgs = ['nom_entreprise'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="mb-3">
                        <label for="encadrant_entreprise" class="form-label">Encadrant d'Entreprise</label>
                        <input type="text" name="encadrant_entreprise" value="<?php echo e($ajouterstage->encadrant_entreprise); ?>" class="form-control" id="encadrant_entreprise" placeholder="Enter Encadrant d'Entreprise">
                        <?php $__errorArgs = ['encadrant_entreprise'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="mb-3">
                        <label for="intitule_stage" class="form-label">Intitulé du Stage</label>
                        <input type="text" name="intitule_stage" value="<?php echo e($ajouterstage->intitule_stage); ?>" class="form-control" id="intitule_stage" placeholder="Enter Intitulé du Stage">
                        <?php $__errorArgs = ['intitule_stage'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="mb-3">
                        <label for="duree_stage" class="form-label">Durée du Stage</label>
                        <input type="text" name="duree_stage" value="<?php echo e($ajouterstage->duree_stage); ?>" class="form-control" id="duree_stage" placeholder="Enter Durée du Stage">
                        <?php $__errorArgs = ['duree_stage'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="mb-3">
                        <label for="description_stage" class="form-label">Description du Stage</label>
                        <textarea name="description_stage" class="form-control" id="description_stage" placeholder="Enter Description du Stage"><?php echo e($ajouterstage->description_stage); ?></textarea>
                        <?php $__errorArgs = ['description_stage'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\Users\X1\projet php\resources\views/edit-ajouterstage.blade.php ENDPATH**/ ?>