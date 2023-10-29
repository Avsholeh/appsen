@extends('layouts.app')

@section('content')
    <div class="row justify-content-center mb-3">
        <div class="col-md-8">
            <div class="d-flex justify-content-between">
                <h3><i class="bi bi-building me-3"></i>Edit Departemen</h3>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{ route('departemen.update', $departemen->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group mb-3">
                    <label for="" class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" value="{{ $departemen->nama }}">
                    @error('nama')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="" class="form-label">Deskripsi</label>
                    <input type="text" name="deskripsi" class="form-control" value="{{ $departemen->deskripsi }}">
                    @error('deskripsi')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
