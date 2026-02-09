<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h3>Edit Mahasiswa</h3>

    <form action="{{ route('mahasiswa.update', $mahasiswa->nim) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- NIM (readonly) -->
        <div class="mb-3">
            <label for="nim" class="form-label">NIM</label>
            <input type="text" class="form-control" id="nim" name="nim" 
                   value="{{ $mahasiswa->nim }}" readonly>
        </div>

        <!-- Nama -->
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" 
                   id="nama" name="nama" value="{{ old('nama', $mahasiswa->nama) }}">
            @error('nama')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Kelas -->
        <div class="mb-3">
            <label for="kelas" class="form-label">Kelas</label>
            <input type="text" class="form-control @error('kelas') is-invalid @enderror" 
                   id="kelas" name="kelas" value="{{ old('kelas', $mahasiswa->kelas) }}">
            @error('kelas')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Matakuliah -->
        <div class="mb-3">
            <label for="matakuliah" class="form-label">Mata Kuliah</label>
            <input type="text" class="form-control @error('matakuliah') is-invalid @enderror" 
                   id="matakuliah" name="matakuliah" value="{{ old('matakuliah', $mahasiswa->matakuliah) }}">
            @error('matakuliah')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>

</body>
</html>