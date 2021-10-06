@extends('dashboard.layouts.main')

@section('section')
<div class="section">
  <section class="section">
    <div class="section-header">
      <h1>Profil</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="/admin">Dashboard</a></div>
        <div class="breadcrumb-item">Profil</div>
      </div>
    </div>
    <div class="section-body">
      <h2 class="section-title">Hi, Admin!</h2>
      <p class="section-lead">
        Ubah informasi tentang diri Anda di halaman ini..
      </p>

      <div class="row mt-sm-4">
        <div class="col-12 col-md-12 col-lg-5">
          <div class="card profile-widget">
            <div class="profile-widget-header">
              <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle profile-widget-picture">
              <div class="profile-widget-items">
                <div class="profile-widget-item">
                  <div class="profile-widget-item-label">Postingan</div>
                  <div class="profile-widget-item-value">187</div>
                </div>
                <div class="profile-widget-item">
                  <div class="profile-widget-item-label">Pengikut</div>
                  <div class="profile-widget-item-value">6,8K</div>
                </div>
                <div class="profile-widget-item">
                  <div class="profile-widget-item-label">Mengikuti</div>
                  <div class="profile-widget-item-value">2,1K</div>
                </div>
              </div>
            </div>
            <div class="profile-widget-description">
              <div class="profile-widget-name">Kurama <div class="text-muted d-inline font-weight-normal"><div class="slash"></div> Web Developer</div></div>
              Kurama adalah nama biju di <b>Konohagakure</b>, terutama di keluarga saya. Dia bukan karakter jahat tetapi pahlawan asli di dunia saya, pahlawan untuk desa Konoha dan dunia. Jadi, saya menggunakan nama sebagai pengguna dalam template ini. Bukan penghargaan, saya hanya bosan dengan <b>'Otsutsuki'</b>.
            </div>
            <div class="card-footer text-center">
              <div class="font-weight-bold mb-2">Ikuti Kurama di</div>
              <a href="#" class="btn-facebook mr-2">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="btn-twitter mr-2">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="https://github.com/hafizhudin/web-photography" class="btn-github mr-2">
                <i class="fab fa-github"></i>
              </a>
              <a href="#" class="btn-instagram">
                <i class="fab fa-instagram"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-12 col-lg-7">
          <div class="card">
            <form method="post" class="needs-validation" novalidate="">
              <div class="card-header">
                <h4>Edit Profil</h4>
              </div>
              <div class="card-body">
                  <div class="row">
                    <div class="form-group col-md-6 col-12">
                      <label>Nama Depan</label>
                      <input type="text" class="form-control" value="Ujang" required="">
                      <div class="invalid-feedback">
                        Silakan isi nama depan
                      </div>
                    </div>
                    <div class="form-group col-md-6 col-12">
                      <label>Nama Belakang</label>
                      <input type="text" class="form-control" value="Maman" required="">
                      <div class="invalid-feedback">
                        Silakan isi nama belakang
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6 col-12">
                      <label>Email</label>
                      <input type="email" class="form-control" value="ujang@maman.com" required="">
                      <div class="invalid-feedback">
                        Silahkan isi emailnya
                      </div>
                    </div>
                    <div class="form-group col-md-6 col-12">
                      <label>No. HP</label>
                      <input type="tel" class="form-control" value="">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-12">
                      <label>Bio</label>
                      <textarea class="form-control summernote-simple">Kurama adalah nama biju di <b>Konohagakure</b>, terutama di keluarga saya. Dia bukan karakter jahat tetapi pahlawan asli di dunia saya, pahlawan untuk desa Konoha dan dunia. Jadi, saya menggunakan nama sebagai pengguna dalam template ini. Bukan penghargaan, saya hanya bosan dengan <b>'Otsutsuki'</b>.</textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group mb-0 col-12">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="remember" class="custom-control-input" id="newsletter">
                        <label class="custom-control-label" for="newsletter">Subscribe to newsletter</label>
                        <div class="text-muted form-text">
                          Anda akan mendapatkan informasi baru tentang produk, penawaran dan promosi
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="card-footer text-right">
                <button class="btn btn-primary">Simpan Perubahan</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection