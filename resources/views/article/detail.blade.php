<x-layout>

    <x-header title="Tutti gli articoli" />
    
    <div class="container">
        <div class="row">
    
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src=" {{Storage::url($article->img)}} " class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">{{$article->title}}</h5>
                      <h5 class="card-title">{{$article->author}}</h5>
                      <p class="card-text">{{substr($article->description , 0 , 100)}} ... </p>
                      <p class="card-text"><small class="text-body-secondary">{{$article->created_at}}</small></p>
                      <a href=" {{route('article.home')}} "class="btn btn-danger">Torna indietro</a>
                      <a href=" {{route('article.update' , compact('article'))}} "class="btn btn-danger">Modifica</a>
                      <a href=" {{route('article.home')}} "class="btn btn-danger">Elimina Articolo</a>
                    </div>
                  </div>
                </div>
              </div>
                  
       </div>
          
    </div>
       
    </x-layout>