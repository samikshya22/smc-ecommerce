@extends('layouts.app')
@section('content')
<h2 class="font-bold text-3xl text-blue-800">Categories</h2>
<hr class="h-1 bg-red-600">

<div class="text-right my-5">
    <a href="{{ route('category.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded"> Add Category</a>
</div>
<table class="mt-5 w-full text-center">
   
        <th class="border border-gray-100 p-2 bg-gray-300">Order</th>
        <th class="border border-gray-100 p-2 bg-gray-300">Category Name</th>
        <th class="border border-gray-100 p-2 bg-gray-300">Action</th>
    </tr>
    @foreach($categories as $category)
    <tr>
        <td class="border p-2 border-gray-300">{{$category->priority}}</td>
        <td class="border p-2 border-gray-300">{{$category->categoryname}}</td>
        <td class="border p-2 border-gray-300">
        <a href="" class="bg-blue-600 tex-white px-2 py-1 rounded mx-1">Edit</a>
        <a href="" class="bg-red-600 tex-white px-2 py-1 rounded mx-1">Delete</a>
        </td>
    </tr>
    @endforeach
    <tr>
        <td class="border p-2 border-gray-300">2</td>
        <td class="border p-2 border-gray-300">Furniture</td>
        <td class="border p-2 border-gray-300">
        <a href="" class="bg-blue-600 tex-white px-2 py-1 rounded mx-1">Edit</a>
        <a href="" class="bg-red-600 tex-white px-2 py-1 rounded mx-1">Delete</a>

        </td>
    </tr>
    
</table>
@endsection