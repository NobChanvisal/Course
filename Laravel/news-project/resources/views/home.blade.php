@extends('layouts.default')

@section('title','Home')

    

@section('main-content')
    <div class=" py-4 px-10 grid grid-cols-5 gap-5">
        @foreach ($news as $item)
            <a class=" w-full" href="{{route('news.show', $item->id)}}" >
                <img class=" w-full" src="{{$item->thumbnail}}" alt="">
                <div>
                    <p class=" text-lg font-semibold">{{$item->title}}</p>
                    <p class=" line-clamp-2">{{$item->description}}</p>
                </div>
            </a>
        @endforeach
    </div>
    <div class=" py-4 px-10">
        {{$news->links()}}
    </div>
@endsection

