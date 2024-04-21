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
                <h2 class="mt-3">Rp. 1.500.000,-</h2>
                <p>Sisa uang kamu tersisa 75% lagi</p>
              </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <i class="bi bi-wallet2 icon"></i>
                      <p class="my-1">Pemasukkan</p>
                      <h3>Rp. 2.000.000,-</h3>
                      <p class="mb-1">
                        <i class="fw-bold ">50</i> Transaksi
                      </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <i class="bi bi-cash-stack icon icon-red"></i>
                    <p class="my-1">Pengeluaran</p>
                    <h3>Rp. 2.000.000,-</h3>
                    <p class="mb-1">
                      <i class="fw-bold">50</i> Transaksi
                    </p>
                  </div>
            </div>
        </div>

        <div class="row d-flex justify-content-between">
            <div class="col-md-5 col-lg-6">
              <h4 class="mx-2">Ringkasan Transaksi </h4>
            </div>
            <div class="col-md-6 d-flex flex-row justify-content-end">
              <button class="blue">
                Pemasukan <i class="bi bi-plus-circle"></i>
              </button>
              <button class="red mx-2">
                Pengeluaran <i class="bi bi-dash-circle"></i>
              </button>
            </div>
        </div>

        <div class="row d-flex my-3 align-items-center">
            <div class="col-8 col-md-6 d-flex ">
              <i class="bi bi-wallet2 icon mx-2"></i>
              <div class="d-flex flex-column mx-3">
                <h5>Menerima Gaji</h5>
                <p>17 Agustus 2023</p>
              </div>
            </div>
            <div class="col-4 col-md-6 d-flex justify-content-end">
              <b class="mx-2">Rp. 2.000.000,-</b>
            </div>
        </div>

        <div class="row d-flex my-3 align-items-center">
            <div class="col-8 col-md-6 d-flex ">
              <i class="bi bi-bag-dash icon icon-red mx-2"></i>
              <div class="d-flex flex-column mx-3">
                <h5>Membeli Kuota</h5>
                <p>17 Agustus 2023</p>
              </div>
            </div>
            <div class="col-4 col-md-6 d-flex justify-content-end">
              <b class="mx-2 text-red">Rp. 2.000.000,-</b>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
