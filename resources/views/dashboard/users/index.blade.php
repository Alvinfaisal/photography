@extends('dashboard.layouts.main')

@section('section')
    <section class="section">
        <div class="section-header">
            <h1>Users</h1>
            <div class="section-header-button">
                <a href="/dashboard/users/create" class="btn btn-primary">Tambah Baru</a>
            </div>
        </div>
        <div class="section-body">

            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>All Users</h4>
                        </div>
                        <div class="card-body">
                            <div class="float-left">
                                <form>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="clearfix mb-3"></div>

                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Username</th>
                                            <th>E-Mail</th>
                                            <th>Created At</th>
                                            <th>Role</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $user->name }}
                                                    <div class="table-links">
                                                        <a href="/dashboard/users/{{ $user->id }}"
                                                            class="btn btn-link">View</a>
                                                        <div class="bullet"></div>
                                                        <a href="#" class="btn btn-link">Edit</a>
                                                        <div class="bullet"></div>
                                                        <form action="/dashboard/users/{{ $user->id }}" method="post"
                                                            class="d-inline">
                                                            @method('delete')
                                                            @csrf
                                                            <button class="btn btn-link text-danger"
                                                                onclick="return confirm('Apa anda yakin ingin?')">Trash</button>
                                                        </form>
                                                    </div>
                                                </td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->created_at }}</td>
                                                <td>
                                                    @if ($user->usertype_id == 1)
                                                        <div class="badge badge-primary">{{ $user->usertype_id }}
                                                        </div>
                                                    @else
                                                        <div class="badge badge-danger">{{ $user->usertype_id }}</div>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>
                            <div class="float-right">
                                <nav>
                                    <ul class="pagination">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                        </li>
                                        <li class="page-item active">
                                            <a class="page-link" href="#">1</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">2</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">3</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


{{-- @section('section')
    <section class="section">
            <div class="section-header">
            <h1>Selamat Datang, {{ Auth::user()->name }}!</h1>
</div>

<div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>User Data Table</h4>
                  </div>
                  <div class="card-body">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">id</th>
                          <th scope="col">Name</th>
                          <th scope="col">Email</th>
                          <th scope="col">Action</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($data as $data)
                        <tr>
                            <th>{{ $data->id }}</th>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->created_at }}</td>

                            

                            @if ($data->usertype == '0')
                            <td><a href="{{ url('/deleteuser',$data->id) }}">Delete</a></td>
                            @else
                            <td><a href="#">Not Allowed</a></td>

                            @endif
                        </tr>

                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
           
            </div>
    </section> --}}
