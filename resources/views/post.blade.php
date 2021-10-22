@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center mt-5 mb-5" >
            <div class="col-md-8">
                <h1 class="mb-3 text-center">{{ $post->title }}</h1>
                <p><small class="text-muted"> {{ $post->created_at->diffForHumans() }}</small></p>
                
                @if ($post->image)
                <div style="max-height:400px; overflow:hidden;">
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="img-fluid">
                </div>
                @else
                <img src="https://source.unsplash.com/1200x400?" alt="{{ $post->title }}" class="img-fluid">
                @endif

                <article class="my-3 fs-5 body-post">
                    {!! $post->body !!}
                </article>
                
                <a href="/posts" class="btn btn-success"><i class="bi bi-arrow-left"></i> Kembali</a>
            </div>
        </div>
    </div>
        
@endsection