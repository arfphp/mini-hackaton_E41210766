<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pendataan Penjualan Batu Bata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center">Pendataan Penjualan Batu Bata</h1>
    <div class="container">
        <form action="/penjualan/create" method="post" class="form-input">
            @csrf
            <div class="mb-2">
                <label class="form-label" for="">Jenis Batu Bata</label>
                <input class="form-control" type="text" name="jenis_batu_bata">
            </div>

            <div class="mb-2">
                <label class="form-label" for="">Harga</label>
                <input class="form-control" type="number" name="harga">
            </div>

            <div class="mb-2">
                <label class="form-label" for="">Stock</label>
                <input class="form-control" type="number" name="stock" min="1000" value="1000">
            </div>

            <div class="mb-2">
                <label class="form-label" for="">Terjual</label>
                <input class="form-control" type="number" name="terjual" min="1000" value="1000">
            </div>

            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>

    <br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Jenis Batu Bata</th>
                <th>Harga</th>
                <th>Stock</th>
                <th>Terjual</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tampil as $item)
                <tr>
                    <td>{{ $item->jenis_batu_bata }}</td>
                    <td>Rp {{ $item->harga }} / 1000 Batu Bata</td>
                    <td>{{ $item->stock }}</td>
                    <td>{{ $item->terjual }}</td>
                    <td>
                        <a class="btn btn-success" href="{{ route('hal_update', $item->id) }}">edit</a>
                        <form action="{{ route('destroy', $item->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>
