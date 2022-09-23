@extends('layouts.app')

@section('content')
    @include('admin.tags.includes.form', [
        'route' => 'admin.tags.update',
        'method' => 'PUT',
        'argument' => $tag->id
    ])
@endsection