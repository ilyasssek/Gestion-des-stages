<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add New User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">Add New User</div>
            <?php if(Session::has('fail')): ?>
                <span class="alert alert-danger p-2"><?php echo e(Session::get('fail')); ?></span>
            <?php endif; ?>
            <div class="card-body">
                <form action="<?php echo e(route('Adddeposerrapport')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    





                    <div class="form-group">
      <label for="rapport">Déposer le rapport</label>
      <input type="file" class="form-control-file" name="deposer_rapport" value="<?php echo e(old('deposer_rapport')); ?>" id="rapport">
    </div>

    <!-- Déposer la présentation -->
    <div class="form-group">
      <label for="presentation">Déposer la présentation</label>
      <input type="file" class="form-control-file"  value="<?php echo e(old('deposer_presentation')); ?>" id="presentation">
    </div>

    <!-- Déposer la fiche d'évaluation -->
    <div class="form-group">
      <label for="evaluation">Déposer la fiche d'évaluation</label>
      <input type="file" class="form-control-file" value="<?php echo e(old('deposer_fiche_evaluation')); ?>" id="evaluation">
    </div>

    <!-- Déposer l'attestation du stage -->
    <div class="form-group">
      <label for="attestation">Déposer l'attestation du stage</label>
      <input type="file" class="form-control-file" value="<?php echo e(old('deposer_attestation_stage')); ?>" id="attestation">
    </div>

                    <button type="submit" class="btn btn-primary">Save</button>

                </form>
                
            </div>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\Users\X1\projet php\resources\views/add-deposerrapport.blade.php ENDPATH**/ ?>