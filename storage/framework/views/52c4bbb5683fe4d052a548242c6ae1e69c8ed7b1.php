<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    
    
   
    <div class="container">
       <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="card mt-3 p-3">
                    <form method="POST" action="/electeur/store" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?> 
                       <div class="form-group">
                            <label for="">Nom</label>
                           <input type="text" name="nom" class="form-control" 
                                class="form-control"
                              
                           />
                            <?php if($errors->has('nom')): ?>
                              <span class="text-danger"><?php echo e($errors->first('nom')); ?></span>
                            <?php endif; ?>
                        </div>
                       <div class="form-group">
                            <label for="">Prenom</label>
                           <input type="text" name="prenom" class="form-control" 
                                class="form-control"
                                
                           />
                           <?php if($errors->has('prenom')): ?>
                              <span class="text-danger"><?php echo e($errors->first('prenom')); ?></span>
                            <?php endif; ?>
                        </div>
                       <div class="form-group">
                            <label for="">CNI</label>
                           <input type="number" name="cni" class="form-control" 
                             class="form-control"
                              value="<?php echo e(old('cni')); ?>"
                           />
                           <?php if($errors->has('parti')): ?>
                              <span class="text-danger"><?php echo e($errors->first('cni')); ?></span>
                            <?php endif; ?>
                        </div>
                       <div class="form-group">
                            <label for="">Adresse</label>
                           <textarea name="adresse" rows="4" class="form-control">
                             <?php echo e(old('adresse')); ?>

                           </textarea>
                           <?php if($errors->has('adresse')): ?>
                              <span class="text-danger"><?php echo e($errors->first('adresse')); ?></span>
                            <?php endif; ?>
                        </div>
                

                        <button type="submit" class="btn btn-dark">Enregistrer</button>
                    </form>
                </div>
            </div>
       </div>
    </div>

                
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">

        </script>
    </body>
</html>



           
       <?php /**PATH C:\Users\damef\projetPairrainages\resources\views/ajout_electeur.blade.php ENDPATH**/ ?>