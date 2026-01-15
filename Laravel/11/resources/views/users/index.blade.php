@extends('layouts.app')
@section('content')
    <div class=" flex justify-between">
        <h1 class=" mb-5 font-semibold text-[20px]">Users lists</h1>
        <a href="{{ route('users.create') }}" class="text-blue-500 hover:text-blue-700">add new user</a>
        <p></p>
    </div>
    <div class=" w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
        @foreach ($users as $user)
            <div class="relative bg-neutral-primary-soft w-full p-6 border border-default rounded-base shadow-xs">
                <div class="flex flex-col items-center">
                    @if ($user->profile && $user->profile->avatar)
                        <img src="{{ asset($user->profile->avatar)}}" class="w-24 h-24 mb-6 rounded-full" alt="{{$user->name}}">
                    @else
                        <img src="https://i.pinimg.com/736x/13/fa/66/13fa66ecb5991c5d2de0a7dc63df0842.jpg" class="w-24 h-24 mb-6 rounded-full border">
                    @endif
                    <h5 class="mb-0.5 text-xl font-semibold tracking-tight text-heading">{{ $user->name }}</h5>
                    <span class="text-sm text-body">{{ $user->email }}</span>
                    <span>
                        @if ($user->personalInfo)
                            {{ $user->personalInfo->phone }}
                        @else
                            no phone number
                        @endif
                    </span>
                    <div class="flex mt-4 md:mt-6 gap-4">
                        <a href="{{route('users.show', $user->id)}}" class=" text-blue-400" >Details</a>
                        <form action="{{ route('users.destroy', $user->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class=" text-red-400">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection