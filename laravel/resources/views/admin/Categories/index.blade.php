@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row row-cols-1">
            <div>
                <a class="btn btn-primary" href="{{ route('admin.categories.create') }}">Crea una Categoria</a>
            </div>

            <table class="table table-dark table-striped">
                <tr>
                    <th>
                        Id
                    </th>
                    <th>
                        Name
                    </th>
                </tr>

                @foreach ($categories as $category)
                <tr>
                    <th>
                        {{ $category->id }}
                    </th>
                    <th>
                        <a href="{{ route('admin.categories.show', $category->id) }}" class="badge badge-pill" 
                            style="background-color: {{ $category->color }}">{{ $category->name }}</a> 
                    </th>
                    <th>
                        <a class="btn btn-primary" href="{{ route('admin.categories.show', $category->id) }}">View</a>
                        <a class="btn btn-primary" href="{{ route('admin.categories.edit', $category->id) }}">Edit</a>
                        <form action="{{ route('admin.categories.destroy', $category->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Cancel</button>
                        </form>
                    </th>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection