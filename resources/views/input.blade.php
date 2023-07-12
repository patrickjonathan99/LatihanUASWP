<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/add" method="POST">
        @csrf
        <div class="nama">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" value="{{ old('nama') }}" required>
            @error('nama')
                {{ $message }}
            @enderror
        </div>

        <div class="nim">
            <label for="nim">NIM</label>
            <input type="text" name="nim" id="nim" value="{{ old('nim') }}" required>
            @error('nim')
                {{ $message }}
            @enderror
        </div>

        <div class="grade">
            <label for="grade">Grade</label>
            <input type="number" name="grade" id="grade" value="{{ old('grade') }}" required>
            @error('grade')
                {{ $message }}
            @enderror
        </div>

        <div class="matakuliah">
            <label for="matakuliah">Mata Kuliah</label>
            <select name="matakuliah" id="matakuliah">
                <option value="" selected disabled>Select Mata Kuliah</option>
                @foreach ($matakuliahs as $mk)
                    <option value="{{ $mk->id }}">{{ $mk->mata_kuliah }}</option>
                @endforeach
            </select>
            @error('matakuliah')
                {{ $message }}
            @enderror
        </div>

        <button class="button" type="submit">Submit</button>
    </form>
</body>
</html>
