@extends('layouts.app')

@section('content')
<div class="w-full h-full">
    <div class="flex text-gray-100 pt-10">
        <div class="m-auto pt-4 pd-16 sm:m-auto w-4/5 block text-center">
            <h1 class="sm:text-black text-5xl uppercase font-extrabold text-shadow-md pd-14">
                Wellcome
            </h1><br>
            <a href="/blog"
                class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase"
            >go to post</a>
        </div>
    </div>
</div>
@endsection