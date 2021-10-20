@extends('layouts.main')

@section('container')
    <h1 class="mt-5 mb-4 text-center">{{ $title }}</h1>

    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/posts">
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari" name="search" value="{{ request('search') }}">
                    <button class="btn btn-success" type="submit"><i class="bi bi-search"></i></button>
                </div>
            </form>
        </div>
    </div>
@if ($posts->count())
    <div class="card mb-3">
        @if ($posts[0]->image)
        <div style="max-height:400px; overflow:hidden;">
        <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->title }}" class="img-fluid">
        </div>
        @else
        <img src="https://source.unsplash.com/1200x400?" class="card-img-top px-4 mt-2" alt="{{ $posts[0]->title }}">
        @endif
        <div class="card-body text-center">
            <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug}}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
            <p>
                <small class="text-muted"> {{ $posts[0]->created_at->diffForHumans() }}</small></p>
            <p class="card-text">{{ $posts[0]->excerpt }}</p>
            <a href="/posts/{{ $posts[0]->slug}}" class="text-decoration-none btn btn-success">Read More</a>
        </div>
  </div>

  <div class="container">
      <div class="row">
          @foreach ($posts->skip(1) as $post)
          <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="position-absolute px-3 py-2" style="background-color:rgba(0, 0, 0, 0.7)"></div>
                    @if ($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="img-fluid">
                    @else
                    <img src="https://source.unsplash.com/500x400?" class="card-img-top" alt="{{ $post->title }}">
                    @endif
                    
                    <div class="card-body">
                      <h5 class="card-title">{{ $post->title }}</h5>
                      <p><small class="text-muted"> {{ $post->created_at->diffForHumans() }}</small></p>
                      <p class="card-text">{{ $post->excerpt }}</p>
                      <a href="/posts/{{ $post->slug}}" class="btn btn-success">Read More</a>
                    </div>
                  </div>
            </div>
        @endforeach
    </div>
  </div>

  @else
      <p class="text-center">Tidak ada postingan artikel.</p>
  @endif

  <div class="d-flex justify-content-center mt-2">
    {{ $posts->links() }}
  </div>
  

@endsection