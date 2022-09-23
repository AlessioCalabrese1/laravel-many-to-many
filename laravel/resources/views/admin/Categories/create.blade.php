@extends('layouts.app')

@section('content')
    @include('admin.categories.includes.form', [
        'route' => 'admin.categories.store',
        'method' => 'POST',
        'argument' => ' ',
    ])
@endsection