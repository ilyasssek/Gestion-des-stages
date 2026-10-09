<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/ilyass.css')); ?>">
   
    
</head>
<body>
    
    <div class="container">
        <div class="nav_bar">
            <button class="nav" onclick="location.href='home2';">
                <h3>HOME</h3>
            </button>
            <button class="nav" onclick="location.href='propos';">
                <h3>A PROPOS</h3>
            </button>
            <button class="nav" onclick="location.href='Admin';">
                <h3>ADMIN</h3>
            </button>
            <!-- <div class="logo">
                
            </div> -->
            <button class="nav" onclick="location.href='Enseignant';">
                <h3>Enseignant</h3>
            </button>
            <button class="nav" onclick="location.href='Etudiant';">
                <h3>Etudiant</h3>
            </button>
            <button class="nav" onclick="location.href='Contact';">
                <h3>Contact</h3>
            </button>

        </div>
        <div class="txt">
            <h1> CONTACTER-NOUS </h1>
        </div>
        <div class="contact">
           <div class="conatct1"> 
                <div class="adress">
                    <img src="<?php echo e(asset('images/adress.jpg')); ?>" class="style-img" alt="" width="15%" height="25%"> 
                    <h2>Notre adresse</h2> 
                    <h4>Angle Bv Hassan II et, Rue Yougoslavie, Marrakech</h4>
                </div>
                <div class="email-call">
                    <div class="email">
                        <img src="<?php echo e(asset('images/adress.jpg')); ?>" class="style-img" alt="" width="15%" height="25%"> 
                        <h2>Notre Email</h2> 
                        <h4>test@gmail.com</h4>
                    </div>
                    <div class="call">
                        <img src="<?php echo e(asset('images/adress.jpg')); ?>" class="style-img" alt="" width="15%" height="25%"> 
                        <h2>Notre telephone</h2> 
                        <h4> 0772910818 </h4>
                    </div>
                </div>
           </div>
           
    </div>


    <div class="contact11">
        <div class="contact111">
        <div class="container p-3">
            <h3>Send Email</h3>
        
            <form action="<?php echo e(route('sendddd')); ?>" method="post">
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
        </div>
    </div>
    
    
</body>
</html>
<?php /**PATH C:\Users\X1\projet php\resources\views/contact2.blade.php ENDPATH**/ ?>