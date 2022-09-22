@extends('layouts.app')

@section('content')
    @include('admin.post.includes.form', [
        'route' => 'admin.posts.update',
        'method' => 'PUT',
        'argument' => $post->id
    ])
@endsection