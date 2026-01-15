@extends('layouts.app')
@section('content')
    <h1 class=" mb-5 text-3xl">Add New Categories</h1>
    <x-alert/>
    <form action="{{ route('categories.store') }}" enctype="multipart/form-data" method="POST">
        @csrf
        <table>
            <tr>
                <th class=" border px-4 py-2">Name</th>
                <td class=" border px-4 py-2">
                    <input class=" border w-full border-gray-300 p-1" type="text" name="name">
                </td>
            </tr>
            <tr>
                <th class=" border px-4 py-2">Description</th>
                <td class=" border px-4 py-2">
                    <textarea class=" border w-full border-gray-300 p-1" name="description" id="" cols="30" rows="10"></textarea>
                </td>
            </tr>
            <tr>
                <th class="border px-4 py-2">Image</th>
                <td class="border px-4 py-2">
                    <input type="file" name="image" id="">
                </td>
            </tr>
            <tr>
                        <td colspan="4" class=" border px-4 py-2 text-center">          
                            <button type="submit" class=" text-white border py-1 px-10 bg-blue-600 hover:bg-blue-700" >add</button>
                        </td>
                    </tr>
        </table>
    </form>
    <a class=" my-4 block" href="{{route('categories.index')}}">Back to categories</a>

@endsection