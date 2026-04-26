<!DOCTYPE html>
<html lang="en">
<head>
  <title>Select a Plan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

<style>

body {
  background: #e9e9e9;
}

.header-area {
  background: #f5f5f5;
  padding: 60px 20px 80px;
  text-align: center;
  margin-bottom: 50px;
  margin-top: 80px;
}

.header-area h2 {
  font-size: 30px;
  margin-bottom: 10px;
}

.header-area p {
  font-size: 13px;
  color: #777;
}

.plan-card {
  background: white;
  border: 1px solid #eee;
  text-align: center;
  padding-bottom: 25px;
}

.plan-title {
  padding: 10px;
  color: white;
  font-size: 13px;
  letter-spacing: 1px;
}

.yellow {
  background: #f2c94c;
}

.green {
  background: #6fcf97;
}

.popular {
  background: #8bd5a6;
  font-size: 11px;
  padding: 5px;
  color: white;
}

.price {
  font-size: 45px;
  color: #999;
  margin: 25px 0;
}

.feature {
  font-size: 13px;
  padding: 10px;
  border-top: 1px solid #eee;
  color: #555;
}

.btn-plan {
  margin-top: 15px;
  width: 80%;
}

</style>

</head>
<body>

<div class="container">

  <div class="header-area">
    <h2>Select a plan.</h2>
    <p>Pilih paket layanan yang paling sesuai dengan kebutuhan Anda.<br>
    Semua paket sudah termasuk akses dashboard dan dukungan pelanggan.</p>
  </div>

  <div class="row text-center">

    <div class="col-md-4">
      <div class="plan-card">

        <div class="plan-title yellow">PERSONAL</div>

        <div class="price">$50<span style="font-size:14px;">/MO</span></div>

        <div class="feature"><b>Free</b> akses dashboard dasar</div>
        <div class="feature"><b>Unlimited</b> penyimpanan file</div>
        <div class="feature"><b>Unlimited</b> unduhan laporan</div>
        <div class="feature"><b>2x</b> akun pengguna</div>
        <div class="feature"><b>100x</b> API request per bulan</div>

        <button class="btn btn-light btn-plan">YOUR PLAN</button>

      </div>
    </div>

    <div class="col-md-4">
      <div class="plan-card">

        <div class="popular">POPULAR</div>
        <div class="plan-title green">PROFESSIONAL</div>

        <div class="price">$100<span style="font-size:14px;">/MO</span></div>

        <div class="feature"><b>Free</b> akses dashboard lengkap</div>
        <div class="feature"><b>Unlimited</b> penyimpanan file</div>
        <div class="feature"><b>Unlimited</b> unduhan laporan</div>
        <div class="feature"><b>2x</b> akun pengguna</div>
        <div class="feature"><b>100x</b> API request per bulan</div>

        <button class="btn btn-warning btn-plan">UPGRADE</button>

      </div>
    </div>

    <div class="col-md-4">
      <div class="plan-card">

        <div class="plan-title yellow">BUSINESS</div>

        <div class="price">$225<span style="font-size:14px;">/MO</span></div>

        <div class="feature"><b>Free</b> akses semua fitur premium</div>
        <div class="feature"><b>Unlimited</b> penyimpanan file</div>
        <div class="feature"><b>Unlimited</b> unduhan laporan</div>
        <div class="feature"><b>2x</b> akun pengguna</div>
        <div class="feature"><b>100x</b> API request per bulan</div>

        <button class="btn btn-warning btn-plan">UPGRADE</button>

      </div>
    </div>

  </div>

</div>

</body>
</html>
