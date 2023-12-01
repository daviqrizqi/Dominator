<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/topup.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title> Dominator Srote</title>
  </head>
  <body>
    <div class="nav-container">
      <div class="nav-logo">
        <img src="assets/img/logods.png" alt="Logo Dominator Store">
        <div class="nav-title">Dominator Store</div>
      </div>    
      <div class="nav-link">
        <a href="#event" class="link-list">Event</a>
        <a href="#promo" class="link-list">Promo</a>
      </div>
    </div>
    <main>
    <div class="container-fluid text-center pt-4">
      <div class="row justify-content-between">
        <div class="col-md-4">
          <!-- Kolom pertama -->
          <div class="col">
            <img src="assets/img/icontopup.jpeg" class="card-img" alt="Gambar Toko" />
            <div class="card-body-title">
              <h5 class="card-title text-start p-0 pt-2">Top Up Diamond Mobile Legends</h5>
               <h6 class="card-subtitle pt-4"> Perhatikan kembali informasi berikut Sebelum Order!!</h6>
              <div class="card-text">Orderan Top Up dicek Pukul 09.00 - 21.00 WIB</div>
              <div class="card-text">Akan Dicek di Hari Berikutnya Jika Melewati Batas Pengecekan Orderan</div>
                <div class="col text-start p-0 pt-4">Cara Order :</div>
                <ol class="text-start p-0 ml-5">
                  <li>Pilih Nominal TopUp </li>
                  <li>Masukkan ID User, Server ID, Nickname & Nomor Whatsapp anda untuk menghindari kesalahan dalam pengisian (ID & Server)</li>
                  <li>Pilih Metode Pembayaran</li>
                  <li>Lakukan Pembayaran</li>
                  <li>Kirim Bukti Pembayaran Melalui form pengisian</li>
                  <li>Tunggu Hingga Diamond masuk ke akun Anda</li>
                </ol>
            </div>
          </div>
        </div>
<form action="{{ route('topup-transaksi') }}" method="post">
        <div class="col-md-8">
          <!-- Kolom kedua -->
          <div class="card">
            <div class="card-body-all">
              <h5 class="card-title">Pemilihan Paket</h5>
              <div class="row">
                <!-- Card produk pertama -->

                @foreach ($product as $item)
                <div class="col-md-3">
                  <input type="radio" class="btn-check" name="packet" id="option1" autocomplete="off">
                  <label class="btn" for="option1">
                  <div class="card">
                    <img src="assets/img/diamondsedikit.png" class="card-img-top" alt="Produk 1" />
                    <div class="card-body">
                      <h6 class="card-subtitle mb-2 text-muted">3 Diamonds</h6>
                      <p class="card-text">Rp. 1.250</p>
                    </div>
                  </div>
                  </label>
                </div>
                @endforeach
               
              </div>
            </div>
          </div>
          <!-- Lengkapi Data -->
          <div class="card">
            <div class="card-body-all">
              <h5 class="card-title">Lengkapi Data</h5>
              <p class="card-text">Masukkan Data Anda</p>
              <form action="">
              <div class="form-group row justify-content-center align-item-center">
                <label for="userid" class="col-sm-4 text-left">User ID</label>
                <div class="col-sm-4">
                  <input type="text" name="userid" id="userid" placeholder="User ID" class="form-control rounded-pill" />
                </div>
              </div>
              <div class="form-group row justify-content-center align-item-center">
                <label for="serverid" class="col-sm-4 text-left">Server ID</label>
                <div class="col-sm-4">
                <input type="text" name="serverid" id="serverid" placeholder="Server ID" class="form-control rounded-pill" />
              </div>
              </div>
              <div class="form-group row justify-content-center align-item-center">
                <label for="nickname" class="col-sm-4 text-left">Nickname</label>
                <div class="col-sm-4">
                <input type="text" name="nickname" id="nickname" placeholder="Nickname" class="form-control rounded-pill" />
              </div>
              </div>
              <div class="form-group row justify-content-center align-item-center">
                <label for="whatsapp" class="col-sm-4 text-left">Nomor Whatsapp</label>
                <div class="col-sm-4">
                <input type="text" name="whatsapp" id="whatsapp" placeholder="Nomor Whatsapp" class="form-control rounded-pill" />
              </div>
              </div>
              <p class="font-italic text-danger">Mohon Cek kembali id dan server game anda untuk menghindari kesalahan!!</p>
            </div>
          </form>
          </div>
          <!-- Metode Pembayaran -->
          <div class="card">
            <div class="card-body-all">
              <h5 class="card-title">Metode Pembayaran</h5>
              <p class="card-text">Pilih Metode Pembayaran</p>
              <div class="row">
                <!-- card pembayaran Gopay -->
                <input type="radio" class="btn-check" name="payment" id="payment1" autocomplete="off">
                  <label class="btn" for="payment1">
                <div class="col-md-12 d-flex justify-content-center">
                  <div class="card-pay w-50 pt-2">
                    <img src="assets/pay/gopay.png" class="card-img-top" alt="Produk 1" />
                    <div class="card-body">
                      <h6 class="card-subtitle mb-2 text-white">Gopay a.n. Dominator Store</h6>
                      <p class="card-text text-white">089512532617</p>
                    </div>
                  </div>
                </div>
                  </label>
                <!-- card pembayaran DANA -->
                <div class="col-md-12 d-flex justify-content-center">
                  <div class="card-pay w-50 pt-2">
                    <img src="assets/pay/dana.png" class="card-img-top" alt="Produk 1" />
                    <div class="card-body">
                      <h6 class="card-subtitle mb-2 text-white">Dana a.n. Iwan Kurniawan</h6>
                      <p class="card-text text-white">089512532617</p>
                    </div>
                  </div>
                </div>
                <!-- card pembayaran OVO -->
                <div class="col-md-12 d-flex justify-content-center">
                  <div class="card-pay w-50 pt-2">
                    <img src="assets/pay/ovo.png" class="card-img-top" alt="Produk 1" />
                    <div class="card-body">
                      <h6 class="card-subtitle mb-2 text-white">OVO a.n. Dominator Store</h6>
                      <p class="card-text text-white">089512532617</p>
                    </div>
                  </div>
                </div>
                <!-- card pembayaran Shopeepay -->
                <div class="col-md-12 d-flex justify-content-center">
                  <div class="card-pay w-50 pt-2">
                    <img src="assets/pay/shopeepay.png" class="card-img-top" alt="Produk 1" />
                    <div class="card-body">
                      <h6 class="card-subtitle mb-2 text-white">Shopeepay a.n. Dominator Store</h6>
                      <p class="card-text text-white">089512532617</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Konfirmasi Pembayaran -->
          <div class="card">
            <div class="card-body-all pd-5">
              <h5 class="card-title">Konfirmasi Pembayaran</h5>
              <p class="card-text">Lampiran Bukti Transaksi</p>
              <input type="file" name="" id="" placeholder="Lampirkan Foto" />
              <div class="nav-order pt-2">
                <a href="" class="btn-order">Order</a>
              </div>
          </div>
        </div>
      </div>
    </div>
    </main>
    <footer class="footer mt-auto py-3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="footer-logo">
              <img src="assets/img/logods.png" alt="Logo Toko" />
            </div>
          </div>
          <div class="col-md-6 text-md-right">
            <div class="footer-social">
              <h5 class="card-text">Contact Me</h5>
              <a href="https://www.facebook.com/profile.php?id=61552239549351&mibextid=LQQJ4d" class="social-icon"><i class="fab fa-facebook"></i></a>
              <a href="https://www.tiktok.com/@dominatorstore?_t=8h63l1Yv1V3&_r=1" class="social-icon"><i class="fab fa-tiktok"></i></a>
              <a href="https://instagram.com/dominatorstore?igshid=MTl1ZnQ4Nnl3MmlvMA==" class="social-icon"><i class="fab fa-instagram"></i></a>
              <a href="http://wa.me/6289512532617" class="social-icon"><i class="fab fa-whatsapp"></i></a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <p>&copy; Copyright 2023 | Dominatorstore.</p>
          </div>
        </div>
      </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>