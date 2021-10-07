@extends('dashboard.layouts.main')

@section('section')
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="/dashboard/users" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
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
                        <form action="/dashboard/users" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input id="name" type="text" class="form-control" name="name" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">E-Mail</label>
                                    <input id="email" type="email" class="form-control" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label for="password" value="{{ __('Password') }}">Password</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fas fa-lock"></i>
                                            </div>
                                        </div>
                                        <input type="password" id="password" name="password" class="form-control pwstrength"
                                            data-indicator="pwindicator" required>
                                    </div>
                                    <div id="pwindicator" class="pwindicator">
                                        <div class="bar"></div>
                                        <div class="label"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="confirm-password" value="{{ __('Confirm Password') }}">Konfirmasi
                                        Password</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fas fa-lock"></i>
                                            </div>
                                        </div>
                                        <input type="password" id="confirm-password" name="confirm-password"
                                            class="form-control pwstrength" data-indicator="pwindicator" required>
                                    </div>
                                    <div id="pwindicator" class="pwindicator">
                                        <div class="bar"></div>
                                        <div class="label"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="usertype_id">Role</label>
                                    <select class="form-control" name="usertype_id">
                                        @foreach ($user_types as $user_type)
                                            <option value="{{ $user_type->id }}">
                                                {{ $user_type->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Tambah</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
    </section>
@endsection
