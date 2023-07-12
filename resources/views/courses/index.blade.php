<!DOCTYPE html>
<html>
<head>
    <title>List of Courses</title>
</head>
<body>
    <h1>List of Courses</h1>
    <a href="{{ route('courses.create') }}">Create New Course</a>
    <ul>
        @foreach ($courses as $course)
            <li>
                <h3>{{ $course->title }}</h3>
                <p>{{ $course->description }}</p>
                <p>Duration: {{ $course->duration }} minutes</p>
                <a href="{{ route('materials.show', $course) }}">View Details</a>
                <a href="{{ route('courses.edit', $course) }}">Edit</a>
                <form action="{{ route('courses.destroy', $course) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
