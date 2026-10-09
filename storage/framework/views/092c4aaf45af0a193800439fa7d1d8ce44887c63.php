<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pages / Login - NiceAdmin Bootstrap Template</title>
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
              <form class="row g-3" action="<?php echo e(route('LoginInfosetudiant')); ?>" method="POST">
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
    
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

   <!-- Vendor JS Files -->
   <script src="<?php echo e(asset('assets/vendor/apexcharts/apexcharts.min.js')); ?>"></script>
   <script src="<?php echo e(asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
   <script src="<?php echo e(asset('assets/vendor/chart.js/chart.umd.js')); ?>"></script>
   <script src="<?php echo e(asset('assets/vendor/echarts/echarts.min.js')); ?>"></script>
   <script src="<?php echo e(asset('assets/vendor/quill/quill.min.js')); ?>"></script>
   <script src="<?php echo e(asset('assets/vendor/simple-datatables/simple-datatables.js')); ?>"></script>
   <script src="<?php echo e(asset('assets/vendor/tinymce/tinymce.min.js')); ?>"></script>
   <script src="<?php echo e(asset('assets/vendor/php-email-form/validate.js')); ?>"></script>
 
   <!-- Template Main JS File -->
   <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>
   <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>

</body>
</html>




<!-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pages / Login - NiceAdmin Bootstrap Template</title>
  
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

             

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                    <p class="text-center small">Enter your username & password to login</p>
                  </div>
                    
                    <?php if(Session::has('success')): ?>
                    <div class="alert alert-success"><?php echo e(Session::get('success')); ?></div>
                    <?php endif; ?>
                    <?php if(Session::has('error')): ?>
                    <div class="alert alert-danger"><?php echo e(Session::get('error')); ?></div>
                    <?php endif; ?>
                  <form class="row g-3" action="<?php echo e(route('LoginInfosetudiant')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <input type="text" name="username" class="form-control" value="<?php echo e(old('username')); ?>">
                      </div>
                      <span class="text-danger"><?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control">
                      <span class="text-danger"><?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Forgot password? <a href="/forgot/password">Recover here!</a></p>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Login</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Don't have account? <a href="/registration/formm">Create an account</a></p>
                    </div>
                  </form>

                </div>
              </div>

             

            </div>
          </div>
        </div>

      </section>

    </div>
  
</body>
</html> --><?php /**PATH C:\Users\X1\projet php\resources\views/login-page2.blade.php ENDPATH**/ ?>