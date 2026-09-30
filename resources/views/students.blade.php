<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>
</head>
<body>

    <h1>Data Mahasiswa</h1>

    @if ($students->count() > 0)
        @foreach ($students as $student)
            <div>
                <h3>{{ $student->name }}</h3>
                <p>NIM: {{ $student->nim }}</p>
                <p>Prodi: {{ $student->major }}</p>
            </div>
            <hr>
        @endforeach
    @else
        <p>Belum ada data mahasiswa.</p>
    @endif

    <a href="/">Kembali ke Home</a>

</body>
</html>