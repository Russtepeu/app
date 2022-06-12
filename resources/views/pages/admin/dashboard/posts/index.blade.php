@extends('pages.admin.layouts.app')


@section('title', 'Posts')

@section('content')

@section('content')

@foreach ($posts as $post)
<div>
    <h1 class="text-3xl">
        {{ $post->title }} <br>

    </h1>

    <p>
        {{ Str::words(strip_tags($post->body), 25) }}

    </p>
</div>
@endforeach

@endsection

@endsection