@extends('layouts.main')

@section('container')
    
<form action="/create" method="POST">
  @csrf
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" aria-describedby="emailHelp" value="{{ old('title') }}">
    @error('title')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="slug" class="form-label">Slug</label>
    <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" id="slug" aria-describedby="emailHelp" value="{{ old('slug') }}">
    @error('slug')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="body" class="form-label">body</label>
    <input type="text" name="body" class="form-control @error('body') is-invalid @enderror" id="body" aria-describedby="emailHelp" value="{{ old('body') }}">
    @error('body')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
    @enderror
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection