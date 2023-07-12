<!DOCTYPE html>
<html>
<head>
    <title>Material Details</title>
</head>
<body>
    <h1>Material Details</h1>
    <a href="{{ route('materials.create') }}">Add Material</a>
    <h3>Title: {{ $material->title }}</h3>
    <p>Description: {{ $material->description }}</p>
    <p>Embed Link: {{ $material->embed_link }}</p>
</body>
</html>
