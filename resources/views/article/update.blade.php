<x-layout>
    <x-header title="Modifica il tuo Articolo" />    
    
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-6">
                
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <
                    <form method="POST" action="{{route('article.edit' , compact('article'))}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label">Nome Articolo</label>
                            <input type="text" class="form-control" name="title" value="{{$article->title}}" id="myInput">
                            <p id="charCount"></p>
                        </div>
                        
                        
                        <div class="mb-3">Descrizione Articolo</label>
                            <textarea name="description" id="" cols="30" rows="10" class="form-control" > {{$article->description}} </textarea>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Copertina Corrente</label>
                            <img src="{{Storage::url($article->img)}}" alt="" style="height: 200px">
                            <input type="file" class="form-control" name="img">
                        </div>
                        
                        
                        <div class="mb-3">
                            <label class="form-label">Inserisci nuova Copertina</label>
                            <input type="file" class="form-control" name="img">
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Autore</label>
                            <input type="text" class="form-control" name="author" value="{{$article->author}}" >
                        </div>
                        <button type="submit" class="btn btn-danger">Submit</button>
                    </form>
                    
                </div>
            </div>
        </div>
        
        
    </x-layout>