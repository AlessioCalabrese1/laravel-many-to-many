@extends('layouts.app')

@section('content')
    @include('admin.categories.includes.form', [
        'route' => 'admin.categories.update',
        'method' => 'PUT',
        'argument' => $category->id
    ])
@endsection