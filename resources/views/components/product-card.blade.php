<div class="card  my-5" style="width: 16rem;">
    <img src="https://picsum.photos/id/237/200/300" class="card-img-top" alt="immagine casuale">
    <div class="card-body">
      <h5 class="card-title">{{$product->name}}</h5>
      <h5 class="card-title">Prezzo : {{$product->price}}</h5>
      <p class="card-text">{{$product->description}}</p>
      <a href="#" class="btn btn-primary">Dettagli</a>
    </div>
  </div>