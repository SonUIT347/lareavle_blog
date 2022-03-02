@extends('layouts.app')
@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl">
            Update Post
        </h1>
    </div>
</div>
@if($errors->any())
<div>
    <ul>
        @foreach($errors->all() as $error)
        <li>
            {{ $error }}
        </li>
        @endforeach
    </ul>
</div>
@endif
<div class="w-4/5 m-auto pt-20">
    <form action="/blog/{{ $post->slug }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <textarea name="title" class="bg-gray-0 block border-b-2 w-full h-10 text-3xl outline-none">{{ $post->title }}</textarea>
        <textarea name="description"  
        class="py-5 bg-gray-0 block border-b-2 w-full h-60 text-xl outline-none ">{{ $post->description }}
        </textarea>
        <button class="mt-15 px-4 py-8 rounded-3xl bg-indigo-500 hover:bg-indigo-700 text-gray-100 text-lg 
        font-extrabold">Submit</button>
    </form>
</div>
@endsection