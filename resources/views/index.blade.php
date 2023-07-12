<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <button class="button inputnewdata">
        <a href="/input">
            Input Data
        </a>
    </button>

    <button class="button inputnewdata">
        <a href="/">
            English
        </a>
    </button>

    <button class="button inputnewdata">
        <a href="/id">
            Indonesia
        </a>
    </button>

    <table class="table tabel">
        <thead>
            <tr>
                <th>{{ __('test.nama') }}</th>
                <th>{{ __('test.nim') }}</th>
                <th>{{ __('test.grade') }}</th>
                <th>{{ __('test.matakuliah') }}</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datas as $d)
            <tr>
                <th>{{ $d->nama }}</th>
                <th>{{ $d->nim }}</th>
                <th>{{ $d->grade }}</th>
                <th>{{ $d->matakuliah->mata_kuliah }}</th>
                <th><button class="button"><a href="/update/{{ $d->id }}">Update</a></button></th>
                <th>
                    <form action="/delete/{{ $d->id }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="button" type="submit">Delete</button>
                    </form>
                </th>
            </tr>
            @endforeach
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
