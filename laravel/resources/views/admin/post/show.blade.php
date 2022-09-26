@extends('layouts.app')

@section('content')
<div class="card text-center">
  <div class="card-header">
    {{ $post->title }}
  </div>
  <div class="card-body">
    {{-- @if (filter_var($post->img, FILTER_VALIDATE_URL))
      <img src="{{ $post->img }}" alt="">
    @else --}}
      <img src="{{ asset('storage/' . $post->img) }}" alt="">
    {{-- @endif --}}
    <h5 class="card-title ">{{ $post->title }}</h5>
    <p class="card-text">Category: <a href="{{ route('admin.categories.show', $post->category->id) }}"
        class="badge badge-pill" style="background-color: {{ $post->category->color }}">{{ $post->category->name }}</a>
    </p>

    <p class="card-text">Tags:
      <span>
        @if ( @isset($post->tags))
        @foreach ($post->tags as $tag)
        {{ $tag->name }} -
        @endforeach
        @else
        nessun tag associato a questo post!
        @endif
      </span>
    </p>

    <p class="card-text">{{ $post->content }}</p>
    <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-primary">Edit</a>
    <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">
      @csrf
      @method('DELETE ')
      <button type="submit" class="btn btn-danger">Cancel</button>
    </form>
  </div>
  <div class="card-footer text-muted">
    {{ $post->date }}
  </div>
</div>
@endsection