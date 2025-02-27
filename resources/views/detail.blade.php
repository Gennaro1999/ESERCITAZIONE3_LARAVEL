<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="/home_page">Home</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Lista Articoli</a>
              </li>
              
          
            </ul>
          </div>
        </div>
      </nav>
    

      <div class="card text-center">
        <div class="card-header">
          
        </div>
        <div class="card-body">
          <h5 class="card-title">Dettaglio articolo</h5>
          <p class="card-text"></p>
         
        </div>
        <div class="card-footer text-body-secondary">
         
        </div>
      </div>




<div class="container gap-2 d-flex">


  
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{$article['title']}}</h5>
    <p class="card-text"><img src="{{$article['image']}}" alt=""></p>
    <p class="card-text">{{$article['description']}}</p>
    <a href="/dettagli/{{$article['title']}}" class="card-link">Scopri di più</a>
     </div>
 </div>

  

 

</div>
      