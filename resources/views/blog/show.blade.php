@extends('layouts.app')
@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl">
            {{ $post->title }}
        </h1>
    </div>
</div>
<div class="m-auto w-10/12 pt-20">
    <span class="text-gray-500">By
        <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>,
        Create on {{ date('jS M Y', strtotime($post->updated_at)) }}   
    </span>
    <p class="text-xl text-gray-700 pt-8 pd-10 leading-8 font-light" >
        {{ $post->description }}
    </p>
    
</div><br>
<div class="w-4/5 m-auto text-left">
@comments([
    'model' => $post,
    'perPage' => 2
])
</div>
@endsection