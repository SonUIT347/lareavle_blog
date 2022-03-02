@extends('layouts.app')
@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl">
            Create Post
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
    <form action="/blog" method="POST" enctype="multipart/form-data">
        @csrf
        <textarea name="title" class="bg-gray-0 block border-b-2 w-full h-10 text-3xl outline-none"></textarea>
        <textarea name="description"  
        class="py-5 bg-gray-0 block border-b-2 w-full h-60 text-xl outline-none ">
        </textarea>
        <div class="bg-grey-lighter pt-15">
            <label class="w-40 flex flex-col item-center px-2 py-3 bg-white-rounded-lg shadow-lg tracking-wide uppercase
            border border-indian cursor-pointer">
            <span class="mt-2 text-base leading-normal">
                Choose file
            </span>
            <input type="file" name="image" class="hidden">
        </label>
        </div>
        <button class="mt-15 px-4 py-8 rounded-5xl bg-indigo-500 hover:bg-indigo-700 text-gray-100 text-lg 
        font-extrabold">Submit</button>
    </form>
</div>
@endsection