<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Electeur</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body class="bg-secondary">


    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
          <a class="navbar-brand" href="home">Accueil</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="liste-candidat">Candidat</a>
              </li>
              <?php if(auth()->user()->email=='damefatyfall@gmail.com'): ?>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="liste-electeur">Electeur</a>
              </li>
              <?php endif; ?>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="liste-programme">Programme</a>
              </li>
            </ul>
            <form action="<?php echo e(route('logout')); ?>" method="POST" class="d-flex" role="search">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button class="btn btn-danger" type="submit">Se deconnecter</button>
            </form>
          </div>
        </div>
    </nav>

        
        <div class="container mt-4">
            <div class="card col-md-6 offset-3">
                <div class="card-header text-center">
                     LISTE DES ELECTEURS
                </div>
            </div>
            <?php if(auth()->user()->email=='damefatyfall@gmail.com'): ?>
            <div class="container">
                <div class="text-right">
                    <a href="electeur/create" class="btn btn-dark mt-2"> Ajouter Electeur</a>
                </div>
            </div>
            <?php endif; ?>
        
             <table class="table table-bordered mt-4">
                 <tr class="bg-light">
                    <th>#</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>CNI</th>
                    <th>Adresse</th>
                    
                 </tr>
               <tbody>
                   <?php $__currentLoopData = $listElec; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tot): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($tot->id); ?></td>
                        <td><?php echo e($tot->nom); ?></td>
                        <td><?php echo e($tot->prenom); ?></td>
                        <td><?php echo e($tot->cni); ?></td>
                        <td><?php echo e($tot->adresse); ?></td>
                        <
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tbody>
            </table>
         </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">

        </script>
    </body>
</html>



           
       <?php /**PATH C:\Users\damef\projetPairrainages\resources\views/list_electeurs.blade.php ENDPATH**/ ?>