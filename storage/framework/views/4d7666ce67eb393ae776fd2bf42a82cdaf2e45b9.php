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
            <button class="nav" onclick="location.href='login/form';">
                <h3>ADMIN</h3>
            </button>
            <!-- <div class="logo">
                
            </div> -->
            <button class="nav" onclick="location.href='login/formmm';">
                <h3>Enseignant</h3>
            </button>
            <button class="nav" onclick="location.href='login/formm';">
                <h3>Etudiant</h3>
            </button>
            <button class="nav" onclick="location.href='contact2';">
                <h3>Contact</h3>
            </button>

        </div>
        <div class="text_home">

            <div class="text">
                <h1>  Bienvenue sur notre site pour la gestion de ton stage </h1>
            </div>
            <div class="home">
               
                <button class="card" onclick="location.href='login/form';">
                    <img src="<?php echo e(asset('images/user.jpg')); ?>" class="style-img" alt="" width="30%" height="30%">
                    <h2>ADMIN</h2>
                    <h4>Espace Administrateur</h4>
                </button>
                <button class="card" onclick="location.href='login/formmm';">
                    <img src="<?php echo e(asset('images/ensignant.png')); ?>" class="style-img" alt="" width="30%" height="30%">
                    <h2>ENSEIGNANT</h2>
                    <h4>Espace Enseignant</h4>
                </button>
                <button class="card" onclick="location.href='login/formm';">
                    <img src="<?php echo e(asset('images/image_student.jpg')); ?>" class="style-img" alt="" width="30%" height="30%">
                    <h2>ETUDIANT</h2>
                    <h4>Espace Etudiant</h4>
                </button>
                
            </div>
        </div>
    </div>
   
    
    
</body>
</html><?php /**PATH C:\Users\X1\projet php\resources\views/home2.blade.php ENDPATH**/ ?>