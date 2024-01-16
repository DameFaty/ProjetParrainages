<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ajouter Candidat</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    
    
   
    <div class="container">
       <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="card mt-3 p-3">
                    <form method="POST" action="/candidat/store" enctype="multipart/form-data">
                        @csrf 
                       <div class="form-group">
                            <label for="">Nom</label>
                           <input type="text" name="nom" class="form-control" 
                                class="form-control"
                                value="{{ old('name')}}"
                           />
                            @if($errors->has('nom'))
                              <span class="text-danger">{{ $errors->first('nom') }}</span>
                            @endif
                        </div>
                       <div class="form-group">
                            <label for="">Prenom</label>
                           <input type="text" name="prenom" class="form-control" 
                                class="form-control"
                                value="{{ old('prenom')}}"
                           />
                           @if($errors->has('prenom'))
                              <span class="text-danger">{{ $errors->first('prenom') }}</span>
                            @endif
                        </div>
                       <div class="form-group">
                            <label for="">Nom parti</label>
                           <input type="text" name="parti" class="form-control" 
                             class="form-control"
                              value="{{ old('parti')}}"
                           />
                           @if($errors->has('parti'))
                              <span class="text-danger">{{ $errors->first('parti') }}</span>
                            @endif
                        </div>
                       <div class="form-group">
                            <label for="">Programme</label>
                           <textarea name="programme" rows="4" class="form-control">
                             {{ old('programme')}}
                           </textarea>
                           @if($errors->has('programme'))
                              <span class="text-danger">{{ $errors->first('programme') }}</span>
                            @endif
                        </div>
                       <div class="form-group">
                            <label for="">valider</label>
                           <input type="text" name="valide" class="form-control"
                              class="form-control"
                              value="{{ old('valide')}}"
                           />
                           @if($errors->has('valide'))
                              <span class="text-danger">{{ $errors->first('valide') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">Photo</label>
                            <input type="file" name="photo" class="form-control"/>
                            @if($errors->has('photo'))
                              <span class="text-danger">{{ $errors->first('photo') }}</span>
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



           
       