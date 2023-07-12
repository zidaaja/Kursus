<!DOCTYPE html>
<html>
<head>
    <title>Edit Course</title>
</head>
<body>
    <h1>Edit Course</h1>
    <form action="{{ route('courses.update', $course) }}" method="post">
        @csrf
        @method('PUT')
        <label>Title:</label>
        <input type="text" name="title" value="{{ $course->title }}" required><br>

        <label>Description:</label>
        <textarea name="description" required>{{ $course->description }}</textarea><br>

        <label>Duration (minutes):</label>
        <input type="number" name="duration" value="{{ $course->duration }}" required><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>
