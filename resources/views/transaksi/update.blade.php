<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FEEDUITEN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/styles.css') }}">
  </head>
  <body>

    <div class="container">
        <div class="row justify-content-center mt-3">
            <div class="col-md-8 ">
                <div class="card">
                    <div class="card-body w-100">
                        <div class="d-flex justify-content-between">
                            <h1 class="card-title">Update Transaksi</h1>
                            <form action="/delete/{{ $transaksi->id }}" method="POST" id="deleteForm" class="mt-2">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                            </form>
                        </div>

                        <form action="/update/{{ $transaksi->id }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="nominal" class="form-label">Nominal</label>
                                <input type="number" class="form-control " id="nominal" name="nominal" placeholder="Masukkan Nominal" value="{{ $transaksi->nominal }}">
                            </div>
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Masukkan Deskripsi" value="{{ $transaksi->deskripsi }}">
                            </div>
                            <div class="mb-3">
                                <label for="tipe" class="form-label">Pilih Tipe</label>
                                <select class="form-select" name="tipe" id="tipe">
                                    <option selected>Pilih jenis yang sesuai</option>
                                    <option value="1" {{ $transaksi->tipe == 1 ? 'selected' : '' }}>Pemasukan</option>
                                    <option value="0" {{ $transaksi->tipe == 0 ? 'selected' : '' }}>Pengeluaran</option>
                                </select>
                            </div>

                            <div class="d-flex justify-content-between">
                                   <a href="/" class="btn btn-primary">Kembali</a>
                                   <button type="submit" class="btn btn-warning">Update</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
