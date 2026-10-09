<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pages / Login - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

 <!-- Favicons -->
 <link href="<?php echo e(asset('img/favicon.png')); ?>" rel="icon">
 <link href="<?php echo e(asset('img/apple-touch-icon.png')); ?>" rel="apple-touch-icon">

 <!-- Vendor CSS Files -->
 <link href="<?php echo e(asset('assets/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
 <link href="<?php echo e(asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet">
 <link href="<?php echo e(asset('assets/vendor/boxicons/css/boxicons.min.css')); ?>" rel="stylesheet">
 <link href="<?php echo e(asset('assets/vendor/quill/quill.snow.css')); ?>" rel="stylesheet">
 <link href="<?php echo e(asset('assets/vendor/quill/quill.bubble.css')); ?>" rel="stylesheet">
 <link href="<?php echo e(asset('assets/vendor/remixicon/remixicon.css')); ?>" rel="stylesheet">
 <link href="<?php echo e(asset('assets/vendor/simple-datatables/style.css')); ?>" rel="stylesheet">
 <link href="<?php echo e(asset('css/font-awesome.min.css')); ?>" rel="stylesheet">
 <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
 <script src="<?php echo e(asset('js/export-excel.min.js')); ?>"></script>
 <script src="<?php echo e(asset('row_merger/dist/row-merge-bundle.min.js')); ?>"></script>
 <!-- Template Main CSS File -->
 <link href="<?php echo e(asset('assets/css/style.css')); ?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">NiceAdmin</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Recover Your Password</h5>
                    <p class="text-center small">Enter your email</p>
                  </div>
                    
                    <?php if(Session::has('success')): ?>
                    <div class="alert alert-success"><?php echo e(Session::get('success')); ?></div>
                    <?php endif; ?>
                    <?php if(Session::has('error')): ?>
                    <div class="alert alert-danger"><?php echo e(Session::get('error')); ?></div>
                    <?php endif; ?>
                  <form class="row g-3" action="<?php echo e(route('forgot')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Email</label>
                      <input type="text" name="email" class="form-control" value="<?php echo e(old('email')); ?>">
                      <span class="text-danger"><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                    </div>

                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Send Email</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0"> <a href="/login/form">login</a></p>
                    </div>
                  </form>

                </div>
              </div>

              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>

            </div>
          </div>
        </div>

      </section>

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

</html><?php /**PATH C:\Users\X1\projet php\resources\views/forgot-password.blade.php ENDPATH**/ ?>