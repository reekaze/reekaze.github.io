@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h1 class="mb-3">{{$post->title }}</h1>

            <p>
                <small>
                    <h4> By <a class="text-decoration-none"
                            href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a>: <a
                            href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
                    </h4>
                </small>
            </p>

            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }} alt="{{ $post->category->name }}" class="img-fluid">

            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>
            

            <a class="d-block mt-3" href="/blog">Back to Posts</a>
        </div>
    </div>
</div>




@endsection