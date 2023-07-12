<!DOCTYPE html>
<html>
<head>
    <title>Edit Material</title>
</head>
<body>
    <h1>Edit Material for "{{ $course->title }}"</h1>
    <form action="{{ route('courses.materials.update', [$course, $material]) }}" method="post">
        @csrf
        @method('PUT')
        <label>Title:</label>
        <input type="text" name="title" value="{{ $material->title }}" required><br>

        <label>Description:</label>
        <textarea name="description" required>{{ $material->description }}</textarea><br>

        <label>Embed Link:</label>
        <input type="text" name="embed_link" value="{{ $material->embed_link }}" required><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>
