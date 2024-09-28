@extends('layouts.dashboard')
<!-- Main Content -->
@section('content')
    halaman managemen user

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Halaman Manajemen User</h4>


                {{-- modal --}}
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Tambah Data
                </button>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Admin</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="card">
                                    <form class="forms-sample" action="{{ route('manajemen.users.add') }}" method="POST">
                                    <div class="card-body">
                                            @csrf
                                            <div class="form-group">
                                                <label for="exampleInputUsername1">Username</label>
                                                <input type="text" class="form-control" id="exampleInputUsername1"
                                                    placeholder="Username" name="name">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1"
                                                    placeholder="Email" name="email">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Role</label>
                                                <select class="form-select" aria-label="Default select example" name="role">
                                                    <option selected>Select Role</option>
                                                    <option value="1">Admin</option>
                                                    <option value="2">User</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Password</label>
                                                <input type="password" class="form-control" id="exampleInputPassword1"
                                                    placeholder="Password" name="password">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                {{-- end modal --}}


                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th> Name </th>
                                <th> Email </th>
                                <th> Role </th>
                                <th> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->role }}</td>
                                    <td>
                                        <button type="button" class="btn btn-warning">Edit</button>
                                        <button type="button" class="btn btn-danger">Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
