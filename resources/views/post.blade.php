@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center mt-5 mb-5" >
            <div class="col-md-8">
                <h1 class="mb-3">{{ $post->title }}</h1>
                @if ($post->image)
                <div style="max-height:400px; overflow:hidden;">
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="img-fluid">
                </div>
                @else
                <img src="https://source.unsplash.com/1200x400?" alt="{{ $post->title }}" class="img-fluid">
                @endif

                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
                

                <a href="/blog" class="d-block mt-3">Back to Posts</a>
            </div>
        </div>
    </div>
        
@endsection