@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row row-cols-1">
            <div>
                <a class="btn btn-primary" href="{{ route('admin.tags.create') }}">Crea un Tag</a>
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

                @foreach ($tags as $tag)
                <tr>
                    <th>
                        {{ $tag->id }}
                    </th>
                    <th>
                        <a href="{{ route('admin.tags.show', $tag->id) }}">{{ $tag->name }}</a> 
                    </th>
                    <th>
                        <a class="btn btn-primary" href="{{ route('admin.tags.show', $tag->id) }}">View</a>
                        <a class="btn btn-primary" href="{{ route('admin.tags.edit', $tag->id) }}">Edit</a>
                        <form action="{{ route('admin.tags.destroy', $tag->id) }}" method="post">
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