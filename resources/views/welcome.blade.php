<x-layout>

<x-header title="ciao" />

<div class="container">
    <div class="row">

        @if($products->isNotEmpty())   
        @foreach ($products as $product)
            <div class="col-12 col-md-6 col-lg-6">

                <x-product-card
               :product="$product"  
                />

            </div>
        @endforeach
        @endif
        
    </div>
</div>

</x-layout>