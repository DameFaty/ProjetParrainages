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
              @if(auth()->user()->email=='damefatyfall@gmail.com')
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="liste-electeur">Electeur</a>
              </li>
              @endif
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="liste-programme">Programme</a>
              </li>
            </ul>
            <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
                @csrf
                @method('DELETE')
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
            @if(auth()->user()->email=='damefatyfall@gmail.com')
            <div class="container">
                <div class="text-right">
                    <a href="electeur/create" class="btn btn-dark mt-2"> Ajouter Electeur</a>
                </div>
            </div>
            @endif
        
             <table class="table table-bordered mt-4">
                 <tr class="bg-light">
                    <th>#</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>CNI</th>
                    <th>Adresse</th>
                    
                 </tr>
               <tbody>
                   @foreach($listElec as $tot)
                    <tr>
                        <td>{{$tot->id}}</td>
                        <td>{{$tot->nom}}</td>
                        <td>{{$tot->prenom}}</td>
                        <td>{{$tot->cni}}</td>
                        <td>{{$tot->adresse}}</td>
                        <
                    </tr>
                    @endforeach

                </tbody>
            </table>
         </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">

        </script>
    </body>
</html>



           
       