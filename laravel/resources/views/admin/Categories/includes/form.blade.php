<form action="{{ route($route, $argument) }}" method="post">
    @csrf
    @method($method)
    <div class="mb-3">
        <label for="category-name" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" id="category-name" value="{{ old('name', $category->name) }}">
    </div>
    <div class="mb-3">
        <label for="category-color">Select category color:</label>
        <input type="color" id="category-color" name="color" value="{{ old('name', $category->color) }}">
    </div>
    
    <button type="submit" class="btn btn-primary">Add</button>
</form>