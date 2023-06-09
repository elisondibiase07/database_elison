<x-layout>

    <x-header title="Tutti gli articoli" />
    
    <div class="container">
        <div class="row">
    
            @if($articles->isNotEmpty())   
            @foreach ($articles as $article)
                <div class="col-12 col-md-6 col-lg-6">
    
                    <x-article-card
                   :article="$article"  
                    />
    
                </div>
            @endforeach
            @endif
            
        </div>
    </div>
    
    </x-layout>