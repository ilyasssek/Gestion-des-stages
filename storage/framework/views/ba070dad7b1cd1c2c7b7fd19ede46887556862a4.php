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
        <div class="prorpos">
            <div class="text1">
                    <h1>Le projet de fin d'étude</h1>
                    <h3>
                    Le projet de fin d'études (PFE) est un projet complet en situation professionnelle qui marque la fin 
                    des études dans une école d'architecture et école d'ingénieurs. Sa durée est habituellement comprise 
                    entre cinq et huit mois.
                    Le projet de fin d'études a pour but de développer l'autonomie et la responsabilité des étudiants, à
                    créer une dynamique de groupe et l'esprit d'un travail collectif et bien sûr à mettre en pratique les 
                    enseignements reçus et permettre ainsi aux étudiants d'affirmer leurs savoir-faire et à considérer leurs
                    compétences.
                    Celui-ci peut se dérouler entièrement au sein de l'entreprise, ou peut nécessiter l'utilisation du
                    matériel de laboratoire de l'école. Ceci amène l'élève ingénieur à alterner les périodes en entreprise 
                    et au sein du laboratoire.
                    </h3>

            </div>
            <div class="imggg">
                <img src="<?php echo e(asset('images/photo.jpg')); ?>" class="style-img" alt="" width="100%" height="100%">
            </div>
        
        </div>

           
    </div>
    <!-- <div class="contact" id="contact">
        <h1> Contact:</h1>
        <h3></h3>
    </div> -->
    
    
</body>
</html><?php /**PATH C:\Users\X1\projet php\resources\views/propos.blade.php ENDPATH**/ ?>