@extends('dashboard.layouts.main')

@section('section')
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="/users" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Tambah Baru Users</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Isi data dibawah</h4>
                        </div>

                        {{-- Form create user --}}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Username</label>
                                <input id="name" type="text" class="form-control" name="name">
                            </div>
                            <div class="form-group">
                                <label for="email">E-Mail</label>
                                <input id="email" type="email" class="form-control" name="email">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-lock"></i>
                                        </div>
                                    </div>
                                    <input type="password" class="form-control pwstrength" data-indicator="pwindicator">
                                </div>
                                <div id="pwindicator" class="pwindicator">
                                    <div class="bar"></div>
                                    <div class="label"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Konfirmasi Password</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-lock"></i>
                                        </div>
                                    </div>
                                    <input type="password" class="form-control pwstrength" data-indicator="pwindicator">
                                </div>
                                <div id="pwindicator" class="pwindicator">
                                    <div class="bar"></div>
                                    <div class="label"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Role</label>
                                <select class="form-control">
                                    <option>Admin</option>
                                    <option>Customer</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary">Tambah</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection