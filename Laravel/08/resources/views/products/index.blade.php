@extends('layouts.app')
@section('content')
    <h1 class=" mb-5 text-3xl">Products</h1>
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
                    <th class=" border px-4 py-2">Category</th>
                    <th class=" border px-4 py-2">Price</th>
                    <th class=" border px-4 py-2">New price</th>
                    <th class=" border px-4 py-2">Description</th>
                    <th class=" border px-4 py-2 text-nowrap">Date</th>
                    <th colspan="2" class=" border px-4 py-2">Option</th>
                </tr>
            </thead>
            
        </table>