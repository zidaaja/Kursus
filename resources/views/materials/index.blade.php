<!DOCTYPE html>
<html>
<head>
    <title>Materials List</title>
</head>
<body>
    <h1>Materials List</h1>
    <ul>
        @foreach ($materials as $material)
            <li>
                <h3>{{ $material->title }}</h3>
                <p>{{ $material->description }}</p>
                <p>Embed Link: {{ $material->embed_link }}</p>
            </li>
        @endforeach
    </ul>
</body>
</html>
