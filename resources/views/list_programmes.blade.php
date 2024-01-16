<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Programmes</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- Ajouter le lien CDN pour Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

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
                     LISTE DES PROGRAMMES
                </div>
            </div>
            @if(auth()->user()->email=='damefatyfall@gmail.com')
            <div class="container">
                <div class="text-right">
                    <a href="programme/create" class="btn btn-dark mt-2"> Ajouter Programme</a>
                </div>
            </div>
            @endif
             <table class="table table-bordered mt-4">
                 <tr class="bg-light">
                    <th>#</th>
                    <th>Titre</th>
                    <th>Contenu</th>
                    <th>Document</th>
                 </tr>
               <tbody>
                   @foreach($listPro as $tot)
                    <tr>
                        <td>{{$tot->id}}</td>
                        <td>{{$tot->titre}}</td>
                        <td>{{$tot->contenu}}</td>
                        <td>
                            <a href="{{  'Programmes_file/'.$tot->document  }}" target="_blank">Voir document</a>
                        </td>

                        <td> <button><i class="fas fa-heart text-danger"></i> J'aime
                        </button>
                    <button><i class="fas fa-thumbs-down"></i> Je n'aime pas
</button></td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
         </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">

        </script>
    </body>
</html>



           
       