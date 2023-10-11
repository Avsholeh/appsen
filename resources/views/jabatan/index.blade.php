@extends('layouts.app')

@section('content')
    <div class="row justify-content-center mb-3">
        <div class="col-md-8">
            @if (session('message'))
                <div class="alert alert-success" role="alert">
                    {{ session('message') }}
                </div>
            @endif
        </div>
        <div class="col-md-8">
            <div class="d-flex justify-content-between">
                <h3><i class="bi bi-building me-3"></i>Jabatan</h3>
                <div><a href="#" class="btn btn-primary btn-sm">Tambah</a></div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama Jabatan</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">#</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jabatans as $jabatan)
                        <tr>
                            <th scope="row">{{ $jabatan->id }}</th>
                            <td>{{ $jabatan->nama }}</td>
                            <td>{{ $jabatan->deskripsi }}</td>
                            <td>
                                <form action="{{ route('jabatan.destroy', $jabatan->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Delete">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $jabatans->links() }}
        </div>
    </div>
@endsection
