<!-- resources/views/success.blade.php -->
<h1>Fichiers téléchargés avec succès !</h1>
<p><?php echo e(session('message')); ?></p>
<p>Rapport : <a href="<?php echo e(asset('storage/' . session('rapport'))); ?>" target="_blank">Voir le fichier</a></p>
<p>Présentation : <a href="<?php echo e(asset('storage/' . session('presentation'))); ?>" target="_blank">Voir le fichier</a></p>
<p>Fiche d'évaluation : <a href="<?php echo e(asset('storage/' . session('fiche_evaluation'))); ?>" target="_blank">Voir le fichier</a></p>
<p>Attestation de stage : <a href="<?php echo e(asset('storage/' . session('attestation_stage'))); ?>" target="_blank">Voir le fichier</a></p>
<?php /**PATH C:\Users\X1\projet php\resources\views/success.blade.php ENDPATH**/ ?>