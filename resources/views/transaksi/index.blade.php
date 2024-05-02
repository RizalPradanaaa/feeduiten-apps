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
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="mt-3">FEEDUITEN APPS</h1>
              </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                @php
                    $sisaUang = $pemasukkan - $pengeluaran;
                    $persentaseTersisa = ($sisaUang / $pemasukkan) * 100;
                @endphp
                <h2 class="mt-3">Rp. {{ number_format($sisaUang, 0, ',', '.') }}</h2>
                <p>Sisa uang kamu tersisa {{ $persentaseTersisa }}% lagi</p>
              </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <i class="bi bi-wallet2 icon"></i>
                      <p class="my-1">Pemasukkan</p>
                      {{-- <h3>Rp. 2.000.000,-</h3> --}}
                      <h3>Rp. {{ number_format($pemasukkan, 0, ',', '.') }}</h3>
                      <p class="mb-1">
                        <i class="fw-bold ">{{ $totalTransaksiPemasukkan }}</i> Transaksi
                      </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <i class="bi bi-cash-stack icon icon-red"></i>
                    <p class="my-1">Pengeluaran</p>
                    {{-- <h3>Rp. 2.000.000,-</h3> --}}
                    <h3>Rp. {{ number_format($pengeluaran, 0, ',', '.') }}</h3>
                    <p class="mb-1">
                      <i class="fw-bold">{{ $totalTransaksiPengeluaran }}</i> Transaksi
                    </p>
                  </div>
            </div>
        </div>

        <div class="row d-flex justify-content-between">
            <div class="col-md-5 col-lg-6">
              <h4 class="mx-2">Ringkasan Transaksi </h4>
            </div>
            <div class="col-md-6 d-flex flex-row justify-content-end">
              <button class="blue" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Pemasukan <i class="bi bi-plus-circle"></i>
              </button>
              <button class="red mx-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Pengeluaran <i class="bi bi-dash-circle"></i>
              </button>
            </div>
        </div>

        @foreach ($allTransaksi as $transaksi)
        <div class="row d-flex my-3 align-items-center">
            <div class="col-8 col-md-6 d-flex ">
                @if ($transaksi->tipe == 1)
                    <i class="bi bi-wallet2 icon mx-2"></i>
                @else
                    <i class="bi bi-cash-stack icon icon-red mx-2"></i>
                @endif
              <div class="d-flex flex-column mx-3">
                <a href="/update/{{ $transaksi->id }}" class="text-decoration-none">
                    <h5>{{ $transaksi->deskripsi }}</h5>
                </a>
                <p>{{ $transaksi->created_at->format('d M Y') }}</p>
              </div>
            </div>
            <div class="col-4 col-md-6 d-flex justify-content-end">
              <b class="mx-2 {{ $transaksi->tipe == 0 ? 'text-red' : '' }}">
                Rp. {{ number_format($transaksi->nominal, 0, ',', '.') }}
              </b>
            </div>
        </div>
        @endforeach
    </div>


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Pemasukan atau Pengeluaran</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form action="/simpan" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nominal" class="form-label">Nominal</label>
                <input type="number" class="form-control" id="nominal" name="nominal" placeholder="Masukkan Nominal">
              </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Masukkan Deskripsi">
            </div>
            <div class="mb-3">
                <label for="tipe" class="form-label">Pilih Tipe</label>
                <select class="form-select" name="tipe" id="tipe">
                    <option selected>Pilih jenis yang sesuai</option>
                    <option value="1">Pemasukan</option>
                    <option value="0">Pengeluaran</option>
                  </select>
            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="red" data-bs-dismiss="modal">Tutup</button>
          <button type="submit" class="blue">Simpan</button>
        </div>
        </form>
      </div>
    </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
