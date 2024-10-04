@extends('admin.dashboard')

@section('content')
    <div class="card">
        <form class="forms-sample" action="{{ route('manajemen.user.update', ['id' => $user->id]) }}" method="POST">
            @method('PUT')
            <div class="card-body">
                @csrf
                <div class="form-group">
                    <label for="exampleInputUsername1">Username</label>
                    <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username" name="name"
                        value="{{ $user->name }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email"
                        value="{{ $user->email }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Role</label>
                    <select class="form-select" aria-label="Default select example" name="role"
                        value="{{ $user->role }}">

                        <option value="1" @if ($user->role == 1) selected @endif>Admin</option>

                        <option value="2" @if ($user->role == 2) selected @endif>User</option>
                    </select>
                </div>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
@endsection
