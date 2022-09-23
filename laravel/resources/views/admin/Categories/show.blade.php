@extends('layouts.app')

@section('content')
<div class="card text-center">
    <div class="card-header">
        {{ $category->name }}
    </div>
    <div class="card-body">
        <h5 class="card-title" style="background-color: {{ $category->color }}">{{ $category->name }}</h5>

        <div class="container">
            <div class="row row-cols-1">
                <div>
                    <a class="btn btn-primary" href="{{ route('admin.posts.create') }}">Crea un Post</a>
                </div>

                <table class="table table-dark table-striped">
                    <tr>
                        <th>
                            Id
                        </th>
                        <th>
                            Author
                        </th>
                        <th>
                            Title
                        </th>
                        <th>
                            Category
                        </th>
                        <th>
                            Options
                        </th>
                    </tr>

                    @foreach ($category->posts as $post)
                    <tr>
                        <th>
                            {{ $post->id }}
                        </th>
                        <th>
                            {{ $post->user->name }}
                        </th>
                        <th>
                            {{ $post->title }}
                        </th>
                        <th>
                            <a href="{{ route('admin.categories.show', $post->category->id) }}" class="badge badge-pill"
                                style="background-color: {{ $post->category->color }}">{{ $post->category->name }}</a>
                        </th>
                        <th>
                            <a class="btn btn-primary" href="{{ route('admin.posts.show', $post->id) }}">View</a>
                            <a class="btn btn-primary" href="{{ route('admin.posts.edit', $post->id) }}">Edit</a>
                            <form action="{{ route('admin.posts.destroy', $post->id) }}" method="post">
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
    </div>
</div>
@endsection