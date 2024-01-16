<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ajouter un programme</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    
    
   
    <div class="container">
       <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="card mt-3 p-3">
                    <form method="POST" action="/programme/store" enctype="multipart/form-data">
                        @csrf 
                       <div class="form-group">
                            <label for="">Titre</label>
                           <input type="text" name="titre" class="form-control" 
                                class="form-control"
                               
                           />
                            @if($errors->has('titre'))
                              <span class="text-danger">{{ $errors->first('titre') }}</span>
                            @endif
                        </div>
                       <div class="form-group">
                            <label for="">Contenu</label>
                           <input type="text" name="contenu" class="form-control" 
                                class="form-control"
                                
                           />
                           @if($errors->has('contenu'))
                              <span class="text-danger">{{ $errors->first('contenu') }}</span>
                            @endif
                        </div>
                       <div class="form-group">
                            <label for="">Document</label>
                           <input type="file" name="document" class="form-control" 
                             class="form-control"
                              
                           />
                           @if($errors->has('document'))
                              <span class="text-danger">{{ $errors->first('document') }}</span>
                            @endif
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



           
       