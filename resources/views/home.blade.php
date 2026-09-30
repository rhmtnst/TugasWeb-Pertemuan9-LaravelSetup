<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>

    <h1>Halo, {{ $name }}! 👋</h1>

    <p>Selamat datang di Tugas Web Pertemuan 9.</p>

    <h3>Mata Kuliah:</h3>

    <ul>
        @foreach ($courses as $course)
            <li>{{ $course }}</li>
        @endforeach
    </ul>

    <a href="/about">About</a> |
    <a href="/contact">Contact</a>
    <a href="/students">Students</a>
</body>
</html>