<!DOCTYPE html>
<html>
<head>
    <title>Create New Course</title>
</head>
<body>
    <h1>Create New Course</h1>
    <form action="{{ route('courses.store') }}" method="post">
        @csrf
        <label>Title:</label>
        <input type="text" name="title" required><br>

        <label>Description:</label>
        <textarea name="description" required></textarea><br>

        <label>Duration (minutes):</label>
        <input type="number" name="duration" required><br>

        <button type="submit">Create</button>
    </form>
</body>
</html>
