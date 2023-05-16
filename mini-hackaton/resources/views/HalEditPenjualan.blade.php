<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center">Halaman Edit Data</h1>
    <div class="container">
        <form action="/penjualan/{{ $editData->id }}" method="post" class="form-input">
            {{-- digunakan untuk menghasilkan token CSRF (Cross-Site Request Forgery) yang akan digunakan sebagai langkah perlindungan keamanan
                saat mengirimkan form. Token CSRF ini memastikan bahwa form dikirimkan hanya oleh aplikasi web yang valid. --}}
            @csrf
            {{-- digunakan untuk memanipulasi metode HTTP yang akan digunakan dalam pengiriman form. directive ini menginstruksikan Laravel
                untuk memperlakukan pengiriman form ini sebagai permintaan "PUT". Ini berguna ketika Anda ingin mengirimkan form untuk mengubah data yang sudah ada,
                di mana metode HTTP PUT umumnya digunakan untuk operasi update. --}}
            @method('put')
            <div class="mb-2">
                <label class="form-label" for="">Jenis Batu Bata</label>
                <input class="form-control" type="text" name="jenis_batu_bata"
                    value="{{ $editData->jenis_batu_bata }}">
            </div>

            <div class="mb-2">
                <label class="form-label" for="">Harga</label>
                <input class="form-control" type="number" name="harga" value="{{ $editData->harga }}">
            </div>

            <div class="mb-2">
                <label class="form-label" for="">Stock</label>
                <input class="form-control" type="number" name="stock" value="{{ $editData->stock }}" min="1000">
            </div>

            <div class="mb-2">
                <label class="form-label" for="">Terjual</label>
                <input class="form-control" type="number" name="terjual" value="{{ $editData->terjual }}"
                    min="1000">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
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
