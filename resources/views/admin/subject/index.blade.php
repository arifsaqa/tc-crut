@extends('layouts.dashboard')
<!-- Main Content -->
@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Halaman Manajemen Subject</h4>

                {{-- modal --}}
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Tambah Data
                </button>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Subject</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="card">
                                    <form class="forms-sample" action="{{ route('subjects.store') }}" method="POST">
                                        <div class="card-body">
                                            @csrf
                                            <div class="form-group">
                                                <label for="exampleInputName">Name</label>
                                                <input type="text" class="form-control" id="exampleInputName"
                                                    placeholder="Name" name="name">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputDescription">Description</label>
                                                <input type="text" class="form-control" id="exampleInputDescription"
                                                    placeholder="Description" name="description">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputSKS">SKS</label>
                                                <input type="number" class="form-control" id="exampleInputSKS"
                                                    placeholder="SKS" name="sks">
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
                                <th> Description </th>
                                <th> SKS </th>
                                <th> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($subjects as $subject)
                                <tr>
                                    <td>{{ $subject->name }}</td>
                                    <td>{{ $subject->description }}</td>
                                    <td>{{ $subject->sks }}</td>
                                    <td>
                                        <button type="button" class="btn btn-warning">Edit</button>
                                        <form action="{{ route('subjects.destroy', ['subject' => $subject->id]) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
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
