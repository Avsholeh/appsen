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
                <h3><i class="bi bi-building me-3"></i>Edit Jabatan</h3>

            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
                <form action="{{route('jabatan.update',$jabatan->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" value="{{ $jabatan->id }}">
                    <div class="form group">
                        <label for="" class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" value="{{$jabatan->nama}}" >
                        @error('nama')
                            <span class="text text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form group">
                        <label for="" class="form-label">deskripsi</label>
                        <input type="text" name="deskripsi" class="form-control" value="{{$jabatan->deskripsi}}">
                    @error('deskripsi')
                        <span class="text text-danger">{{ $message }}</span>
                    @enderror
                    </div>

                    <div class="form group">
                       <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>

                </form>

            {{-- {{ $jabatans->links() }} --}}
        </div>
    </div>
@endsection
