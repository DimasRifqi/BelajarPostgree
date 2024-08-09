<!DOCTYPE html>
<html>
<head>
    <title>Edit Item</title>
</head>
<body>
    <h1>Edit Item</h1>
    <form action="{{ route('items.update', $item->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ $item->name }}" required>
        <br>
        <label for="description">Description:</label>
        <textarea name="description" id="description" required>{{ $item->description }}</textarea>
        <br>
        <label for="price">Price:</label>
        <input type="number" name="price" id="price" step="0.01" value="{{ $item->price }}" required>
        <br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
