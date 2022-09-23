<form action="{{ route($route, $argument) }}" method="post">
    @csrf
    @method($method)
    <div class="mb-3">
        <label for="tag-name" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" id="tag-name" value="{{ old('name', $tag->name) }}">
    </div>
    
    <button type="submit" class="btn btn-primary">Add</button>
</form>