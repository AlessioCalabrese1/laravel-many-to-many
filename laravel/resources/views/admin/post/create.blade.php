@extends('layouts.app')

@section('content')
    @include('admin.post.includes.form', [
        'method' => 'POST',
        'route' => 'admin.posts.store',
        'categories' => $categories,
        'argument' => ' ',
    ])
@endsection