@extends('layouts.app')

@section('content')
    @include('admin.tags.includes.form', [
        'route' => 'admin.tags.store',
        'method' => 'POST',
        'argument' => ' ',
    ])
@endsection