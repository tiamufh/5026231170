<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ITS TV Production</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
      integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="kode7.css" />
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-light bg-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img
            src="images/Logo.png"
            alt="Logo"
            width="60"
            height="60"
            class="rounded-circle border border-dark"
          />
        </a>
      </div>
    </nav>

    <div class="custom-card justify-content-between" style="padding: 0px 100px">
      <div class="text-start mb-4 text-white">
        <h1 style="font-weight: bold; font-size: 60px">
          ITS TV <br />
          PRODUCTION <br />
          EQUIPMENT
        </h1>
        <p>Solusi praktis peminjaman alat kebutuhan produksi</p>
        <button class="btn-book">Book Now!</button>
      </div>
      <div class="text-center">
        <img
          src="images/camer.png"
          height="300"
          alt="Camera"
          class="image-shadow"
        />
      </div>
    </div>

    <div style="background-color: #e3e3e3">
      <div class="container py-4">
        <div class="d-flex align-items-center gap-2">
          <i class="fa-solid fa-arrow-left" style="font-size: 40px"></i>
          <h3 class="m-0">Detail Peminjaman</h3>
        </div>
      </div>
    </div>

    <div
      class="container d-flex align-items-center justify-content-evenly flex-wrap"
    >
      <div class="profile-icon">
        <i class="fas fa-user"></i>
      </div>
      <form action="">
        <div class="input-container">
          <label for="name">Nama Lengkap</label>
          <input
            type="text"
            id="name"
            placeholder=" "
            required
            value="Yanuar"
          />
        </div>
        <div class="input-container">
          <label for="name">Acara / Kegiatan</label>
          <input
            type="text"
            id="name"
            placeholder=" "
            required
            value="Liputan pangukuah proffesor"
          />
        </div>
        <div class="input-container">
          <label for="name">Tanggal</label>
          <input
            type="text"
            id="name"
            placeholder=" "
            required
            value="20/11/24 - 22/11/2024"
          />
        </div>
        <div class="input-container">
          <label for="name">Waktu</label>
          <input
            type="text"
            id="name"
            placeholder=" "
            required
            value="07.00 - 19.00"
          />
        </div>
      </form>
    </div>

    <div class="container">
      <div
        class=""
        style="
          border: 3px solid black;
          background-color: black;
          height: 3px;
          margin: 10px 0;
          width: 100%;
        "
      ></div>
    </div>

    <div class="container">
      <!-- 1 -->
      <div class="row justify-content-center mt-3">
        <div class="col-md-12">
          <div class="card p-4 shadow-sm bg-light">
            <div class="row align-items-center">
              <div class="col-md-4 text-center">
                <img
                  src="images/canon.jpg"
                  alt="Canon EOS 4000D"
                  class="img-fluid product-image"
                />
                <div class="product-title mt-2">CANON EOS 4000D</div>
              </div>
              <div class="col-md-8">
                <h4 class="fw-bold">Deskripsi Alat</h4>
                <p class="description-text">
                  Canon EOS 400D adalah kamera DSLR entry-level yang dirancang
                  untuk fotografer pemula maupun penghobi yang ingin
                  meningkatkan keterampilan fotografi mereka. Kamera ini
                  dilengkapi dengan sensor CMOS APS-C beresolusi 10,1
                  megapiksel, yang mampu menghasilkan gambar berkualitas tinggi
                  dengan detail tajam dan warna akurat.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- 2 -->
      <div class="row justify-content-center mt-3">
        <div class="col-md-12">
          <div class="card p-4 shadow-sm bg-light">
            <div class="row align-items-center">
              <div class="col-md-4 text-center">
                <img
                  src="images/lighting.jpg"
                  alt="Canon EOS 4000D"
                  class="img-fluid product-image"
                />
                <div class="product-title mt-2">Tripod light studi 2024</div>
              </div>
              <div class="col-md-8">
                <h4 class="fw-bold">Deskripsi Alat</h4>
                <p class="description-text">
                  Tripod Light Studio 2024 adalah tripod profesional yang
                  dirancang untuk mendukung pencahayaan dalam fotografi dan
                  videografi studio. Dengan konstruksi yang kokoh dan fitur yang
                  canggih, tripod ini memastikan stabilitas dan fleksibilitas
                  dalam berbagai kebutuhan pencahayaan.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
