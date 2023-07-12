<!DOCTYPE html>
<html>
<head>
    <title>Course Details</title>
</head>
<body>
    <h1>Course Details</h1>
    <h3>Title: {{ $course->title }}</h3>
    <p>Description: {{ $course->description }}</p>
    <p>Duration: {{ $course->duration }} minutes</p>
</body>
</html>
