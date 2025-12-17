<x-app title="Product Page">
    
    <div class="product-container">
        @foreach ($products as $pro)
            <x-product-card 
                title="{{ $pro['title'] }}" 
                description="{{ $pro['description'] }}" 
                price="{{ $pro['price'] }}" 
                newPrice="{{ $pro['newPrice'] ?? null }}"
                image="{{ $pro['image'] }}"
            />           
        @endforeach
    </div>
</x-app>