@extends('layouts.main')

@section('container')

<div class="row">
  @foreach ($posts as $post)
  <div class="col-lg-3 mb-4">
    <div class="card h-100" style="width: 16rem;">
      <div class="card-body">
        <h5 class="card-title">{{ $post->title }}</h5>
        <p class="card-text">{{ $post->body }}</p>
        <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More</a>
        <a href="/posts/edit/{{ $post->slug }}" class="btn btn-primary">Edit</a>
        <a href="/posts/hapus/{{ $post->slug }}" class="btn btn-primary">Hapus</a>
      </div>
    </div>
  </div>
  @endforeach
</div>


@endsection