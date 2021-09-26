@extends('layouts.main')


@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h2 class="mb-3">{{ $post->title }}</h2>


            <p class="text-muted">By: <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

            @if ($post->image)
                <div style="max-height: 400px; overflow: hidden;">
                    <img src="{{ asset('storage/'. $post->image) }}" class="card-img-top mt-3" alt="{{ $post->category->name }}" class="img-fluid">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}" class="img-fluid">
            @endif

            {{-- buat menampilkan data yg ada tag html di dalamnya --}}
            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>
            <a href="/posts" class="d-block mt-3 text-decoration-none">Back to posts</a>
        </div>
    </div>
</div>

@endsection
