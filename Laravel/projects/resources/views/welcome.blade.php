<x-app-layout>
    
    <div class=" p-20">
        @foreach ($news as $item)
            <div>
                <img src="{{$item->thumbnail}}" alt="">
                <div class="info">
                    <p>{{$item->title}}</p>
                    <p>{{$item->description}}</p>
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>