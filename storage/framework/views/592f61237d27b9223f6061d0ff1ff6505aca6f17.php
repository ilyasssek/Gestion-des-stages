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
            <button class="nav" onclick="location.href='home';">
                <h3>HOME</h3>
            </button>
            <button class="nav" onclick="location.href='propos';">
                <h3>A PROPOS</h3>
            </button>
            <button class="nav" onclick="location.href='espaceadmin';">
                <h3>ADMIN</h3>
            </button>
            <!-- <div class="logo">
                
            </div> -->
            <button class="nav" onclick="location.href='espaceenseignant';">
                <h3>Enseignant</h3>
            </button>
            <button class="nav" onclick="location.href='signup';">
                <h3>Etudiant</h3>
            </button>
            <button class="nav" onclick="location.href='contact';">
                <h3>Contact</h3>
            </button>

        </div>
        <div class="text_home">

            <div class="text">
                <h1>  Bienvenue sur notre site pour la gestion de ton stage </h1>
            </div>
            <div class="home">
                <!-- <img src="./image.jpg" alt="" width="100%" height="100%"> -->
                <button class="card" onclick="location.href='espaceadmin';">
                    <img src="<?php echo e(asset('images/user.jpg')); ?>" class="style-img" alt="" width="30%" height="30%">
                    <h2>ADMIN</h2>
                    <h4>Espace Administarteur</h4>
                </button>
                <button class="card" onclick="location.href='espaceenseignant';">
                    <img src="<?php echo e(asset('images/ensignant.png')); ?>" class="style-img" alt="" width="30%" height="30%">
                    <h2>ENSEIGNANT</h2>
                    <h4>Espace Enseignant</h4>
                </button>
                <button class="card" onclick="location.href='signup';">
                    <img src="<?php echo e(asset('images/image_student.jpg')); ?>" class="style-img" alt="" width="30%" height="30%">
                    <h2>ETUDIANT</h2>
                    <h4>Espace Etudiant</h4>
                </button>
                
            </div>
        </div>
    </div>
    <!-- <div class="contact" id="contact">
        <h1> Contact:</h1>
        <h3></h3>
    </div> -->
    
    
</body>
</html><?php /**PATH C:\Users\X1\projet php\resources\views/home.blade.php ENDPATH**/ ?>