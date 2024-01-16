<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ajouter un electeur</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    
    
   
    <div class="container">
       <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="card mt-3 p-3">
                    <form method="POST" action="/electeur/store" enctype="multipart/form-data">
                        @csrf 
                       <div class="form-group">
                            <label for="">Nom</label>
                           <input type="text" name="nom" class="form-control" 
                                class="form-control"
                              
                           />
                            @if($errors->has('nom'))
                              <span class="text-danger">{{ $errors->first('nom') }}</span>
                            @endif
                        </div>
                       <div class="form-group">
                            <label for="">Prenom</label>
                           <input type="text" name="prenom" class="form-control" 
                                class="form-control"
                                
                           />
                           @if($errors->has('prenom'))
                              <span class="text-danger">{{ $errors->first('prenom') }}</span>
                            @endif
                        </div>
                       <div class="form-group">
                            <label for="">CNI</label>
                           <input type="number" name="cni" class="form-control" 
                             class="form-control"
                              value="{{ old('cni')}}"
                           />
                           @if($errors->has('parti'))
                              <span class="text-danger">{{ $errors->first('cni') }}</span>
                            @endif
                        </div>
                       <div class="form-group">
                            <label for="">Adresse</label>
                           <textarea name="adresse" rows="4" class="form-control">
                             {{ old('adresse')}}
                           </textarea>
                           @if($errors->has('adresse'))
                              <span class="text-danger">{{ $errors->first('adresse') }}</span>
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



           
       