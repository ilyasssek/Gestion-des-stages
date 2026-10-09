<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link rel="stylesheet" href="<?php echo e(asset('css/test.css')); ?>">



</head>
<body>
  <main>
      <div class="login">
        <div class="pt-4 pb-2">
          <h2 >Login to Your Account</h2>
          <h3>Enter your username & password to login</h3>
        </div>
        <?php if(Session::has('success')): ?>
        <div class="alert alert-success"><?php echo e(Session::get('success')); ?></div>
          <?php endif; ?>
          <?php if(Session::has('error')): ?>
            <div class="alert alert-danger"><?php echo e(Session::get('error')); ?></div>
              <?php endif; ?>
              <form class="row g-3" action="<?php echo e(route('LoginUser')); ?>" method="POST">
              <?php echo csrf_field(); ?>
               <div class="col-12">
                  <h3 for="yourUsername" >Username:</h3>
                    <div class="input-group has-validation">
                     <input type="text" name="username" class="form-control" >
                    </div>
                    <div class="text-danger"><?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></div>
                    </div>
                    <div class="col-12">
                      <h3 for="yourPassword" >Password:</h3>
                      <input type="password" name="password" class="form-control">
                        <div class="text-danger"><?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></div>
                        </div>
                        <div style="height: 20px;">
                        </div>
                        <div class="col-12">
                          <button class="btn btn-primary w-100" type="submit">Login</button>
                        </div>
                      </form>
                    </div>
                </div>
    
  </main>
</body>
</html>

<?php /**PATH C:\Users\X1\projet php\resources\views/login-page.blade.php ENDPATH**/ ?>