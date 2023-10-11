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
                <h3><i class="bi bi-building me-3"></i>Departemen</h3>
                <div><a href="{{ route('departemen.create') }}" class="btn btn-primary btn-sm">Tambah</a></div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">#</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($departemens as $departemen)
                        <tr>
                            <th scope="row">{{ $departemen->id }}</th>
                            <td>{{ $departemen->nama }}</td>
                            <td>{{ $departemen->deskripsi }}</td>
                            <td>
                                <form action="{{ route('departemen.destroy', $departemen->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Delete">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $departemens->links() }}
        </div>
    </div>
@endsection
