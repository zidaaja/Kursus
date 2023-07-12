<!DOCTYPE html>
<html>
<head>
    <title>Add Material</title>
</head>
<body>
    <h1>Add Material for "{{ $course->title }}"</h1>
    <form action="{{ route('courses.materials.store', $course) }}" method="post">
        @csrf
        <label>Title:</label>
        <input type="text" name="title" required><br>

        <label>Description:</label>
        <textarea name="description" required></textarea><br>

        <label>Embed Link:</label>
        <input type="text" name="embed_link" required><br>

        <button type="submit">Add</button>
    </form>
</body>
</html>
