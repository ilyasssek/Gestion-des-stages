<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Email Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container p-3">
        <h3>Send Email</h3>
      

        <form action="<?php echo e(route('sendd')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="form-group my-2">
                <label for="title">Title</label>
                <input type="text" id="title" placeholder="Enter email title" name="title" class="form-control">
                <span class="text-danger"><?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
            </div>
            <div class="form-group my-2">
                <label for="email">Receiver Email</label>
                <input type="email" id="email" placeholder="Enter receiver email" name="email" class="form-control">
                <span class="text-danger"><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
            </div>
            <div class="form-group my-2">
                <label for="body">Mail Body</label>
                <textarea id="body" placeholder="Enter mail body" name="body" class="form-control"></textarea>
                <span class="text-danger"><?php $__errorArgs = ['body'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
            </div>
            <div class="form-group my-2">
                <label for="footer">Footer</label>
                <textarea id="footer" placeholder="Enter mail footer" name="footer" class="form-control"></textarea>
                <span class="text-danger"><?php $__errorArgs = ['footer'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
            </div>
            <button type="submit" class="btn btn-primary btn-sm mt-3">Send</button>
        </form>
    </div>



    <h1 class="text-center my-4">Email des étudiants</h1>
    
    <?php if(session('infosetudiants')): ?>
    <div class="container mt-3">
        <h4 class="mb-3">Étudiants sélectionnés :</h4>
        <?php $__currentLoopData = session('infosetudiants'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $etudiant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card mb-3">
                <div class="card-body">
                    <p><strong>Nom : </strong><?php echo e($etudiant['name']); ?></p>
                    <p><strong>Email : </strong><?php echo e($etudiant['email']); ?></p>
                    <p><strong>Matricule : </strong><?php echo e($etudiant['matricule']); ?></p>
                    
                    
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php endif; ?>
</body>
</html>
<?php /**PATH C:\Users\X1\projet php\resources\views/emailencadrant.blade.php ENDPATH**/ ?>