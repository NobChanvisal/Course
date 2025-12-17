{{-- Product Card Component --}}
<div class="product-card">
    <div class="image">
        <img src="{{$image}}" alt="">
    </div>
    <div class="product-info">
        <h2>{{$title}}</h2>
        <p>{{$description}}</p>
        <div class="price"> 
            <p 
                @if($newPrice == null)
                    style="text-decoration: none"
                @else
                    style="text-decoration: line-through; color: gray;"
                @endif
            >${{$price}}</p>  
            @if($newPrice)
                <span class="new-price">${{ $newPrice }}</span>
            @endif
        </div>

        <button>Add to Cart</button>
    </div>
</div>