<x-layout>
    <x-header title="Crea il tuo Articolo" />
    
    
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <x-article-form/>
            </div>
        </div>
    </div>
    
    
</x-layout>