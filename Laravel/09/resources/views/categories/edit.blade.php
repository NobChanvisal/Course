@extends('layouts.app')
@section('content')
    <h1 class=" mb-5 text-3xl">Edit Categories</h1>
    <x-alert/>
    <form action="{{ route('categories.update', $category->id) }}" method="POST" class="w-full max-w-lg">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                Name
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="name" name="name" type="text" value="{{ $category->name }}" required>
        </div>
        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="description">
                Description
            </label>
            <textarea
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="description" name="description" required>{{ $category->description}}</textarea>
        </div>
        <div class="flex items-center justify-between">
            <button
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                type="submit">
                Update Category
            </button>
        </div>
    </form>
    <a class=" my-4 block" href="{{route('categories.index')}}">Back to categories</a>
@endsection