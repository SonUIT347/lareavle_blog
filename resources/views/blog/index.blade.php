@extends('layouts.app')
@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="py-15 border-b border-gray-200">
        <h1 class="text-6xl">
            Blog Post
        </h1>
        @if( session()->has('message'))
        <div class="mt-10 w-4/5 m-auto text-center">
            <p class="w-3/6 mp-4 rounded-2xl py-4 bg-green-500">
                {{ session()->get('message') }}
            </p>    
        </div>
        @endif
        <div>
        @if(Auth::check())
        <div class="pt-15 w-4/5 m-auto">
            <a href="blog/create" class="px-5 bg-indigo-500 uppercase 
            bg-transparent text-gray-200 text-xs font-extrabold py-3 rounded-2xl hover:bg-indigo-700">
            Create Post</a>
        </div>
        @endif
        </div>

    </div>
</div>
@foreach($posts as $post)
    <div class="sm:grid w-4/5 mx-auto py-15 border-b border-black-200">
    <h2 class="text-gray-700 font-bold text-4xl pd-4">
            {{ $post->title }}
        </h2>
        <div>
            <img src="{{ asset('image/' . $post->image_path) }}" alt="not found the image">
        </div>
        <span class="text-gray-500">
            By <span class="text-gray-900 font-bold italic">
                {{ $post->user->name }}
            </span> Create on {{ date('jS M Y', strtotime($post->updated_at)) }}
        </span>
        <div>
            
        </div>
        <p class="text-xl text-gray-700 pt-8 pd-10 leading-8 font-light">
            {{ $post->description }}
        </p>
        <a href="/blog/{{ $post->slug }}" class="uppercase w-1/6 text-center bg-green-300 text-lg font-extrabold hover:bg-green-500
        rounded-2xl p-1">
        read more</a>
        @if(isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
        <span class="text-black-100 text-xs font-extrabold hover:underline
        rounded-2xl p-1 italic">
            <a href="/blog/{{ $post->slug }}/edit">
            Edit
            </a>

        </span>
        <span class="float-right text-center">
            <form action="/blog/{{ $post->slug }}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="bg-red-500 text-gray-100 text-xl font-extrabold hover:bg-red-700
        rounded-2xl p-2 italic">Delete Post</button>
            </form>
        </span>
        @endif
    </div>
@endforeach
<div class="text-center d-flex text-xl">
    {{ $posts -> links('pagination::bootstrap-4') }}
</div>
@endsection
