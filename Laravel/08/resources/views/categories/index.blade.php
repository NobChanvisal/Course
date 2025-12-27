@extends('layouts.app')
@section('content')
    <h1 class=" mb-5 text-3xl">Categories</h1>

        <x-alert>
            @if (session('success'))
                {{ session('success') }}
            @elseif (session('error'))
                {{ session('error') }}
            @endif  
        </x-alert>

        <table>
            <thead>
                <tr>
                    <th class=" border px-4 py-2">ID</th>
                    <th class=" border px-4 py-2">Name</th>
                    <th class=" border px-4 py-2">Description</th>
                    <th class=" border px-4 py-2 text-nowrap">Date</th>
                    <th colspan="2" class=" border px-4 py-2">Option</th>
                    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="6" class=" border px-4 py-2 text-center">
                        <a class=" text-blue-500" href="{{route('categories.create')}}">add new category</a>
                    </td>
                </tr>
                @foreach ($categories as $category)
                    <tr>
                        <td class=" border px-4 py-2">{{ $category->id }}</td>
                        <td class=" border px-4 py-2">{{ $category->name }}</td>
                        <td class=" border px-4 py-2">{{ $category->description }}</td> 
                        <td class=" border px-4 py-2 text-nowrap">{{ $category->created_at->format('d-M-Y') }}</td>
                        <td class=" border px-4 py-2">
                            <a class=" text-blue-500" href="{{ route('categories.edit', $category->id) }}">Edit</a>
                        </td>
                        <td class=" border px-4 py-2">
                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class=" text-red-500"
                                    onclick="return confirm('Are you sure you want to delete this category?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                
            </tbody>
        </table>


@endsection