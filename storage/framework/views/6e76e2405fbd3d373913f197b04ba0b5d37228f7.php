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
                        <h4> 0574654231 </h4>
                    </div>
                </div>
           </div>
           <div class="conatct2">
                <div class="send-email">
                    <input type="text" class="input1" placeholder="Votre Nom">
                    <input type="text" class="input1" placeholder="sujet">
                    <input type="text" class="input1" placeholder="Votre email">
                    <input type="text" class="input2" placeholder="message">
                    <button class="stylebtn"> envoyer </button>
                </div>
           </div>
        
        </div>

           
    </div>
    <!-- <div class="contact" id="contact">
        <h1> Contact:</h1>
        <h3></h3>
    </div> -->
    
    
</body>
</html><?php /**PATH C:\Users\X1\projet php\resources\views/contact.blade.php ENDPATH**/ ?>