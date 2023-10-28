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
                <h3><i class="bi bi-building me-3"></i>Absensi</h3>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="row mb-3">
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Tanggal</h5>
                            <form id="tanggal" action="{{ route('absensi.index') }}" method="GET" class="d-inline-block">
                                <input type="date" name="tanggal" class="form-control" value="{{ $selectedDate->format('Y-m-d') }}">
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Hadir</h5>
                            <span>10</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Izin</h5>
                            <span>10</span>
                        </div>
                    </div>
                </div>
            </div>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col" rowspan="2" class="align-middle">No</th>
                        <th scope="col" rowspan="2" class="align-middle">Nama</th>
                        <th scope="col" rowspan="2" class="align-middle">Tanggal</th>
                        <th scope="col" colspan="2" class="text-center">Jam</th>
                        <th scope="col" rowspan="2" class="align-middle">Status</th>
                        <th scope="col" rowspan="2" class="align-middle text-center">#</th>
                    </tr>
                    <tr>
                        <th scope="col">Masuk</th>
                        <th scope="col">Keluar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>
                                <small class="badge bg-primary me-2">{{ $user->id }}</small>
                                <span>{{ $user->name }}</span>
                            </td>
                            @if (!empty($user->absensi_latest) && $user->absensi_latest->tanggal->equalTo($selectedDate->format('Y-m-d')))
                                <td>{{ $user->absensi_latest->tanggal }}</td>
                                <td>{{ $user->absensi_latest->jam_masuk }}</td>
                                <td>{{ $user->absensi_latest->jam_keluar }}</td>
                                <td><span class="badge bg-success">Masuk</span></td>
                            @else
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td><span class="badge bg-warning">Izin</span></td>
                            @endif
                            <td><button type="button" class="btn btn-sm btn-primary">Detail</button></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $users->links() }}
        </div>
    </div>
@endsection

@push('script')
    <script>
        $(document).ready(function() {
            $('#tanggal').change(function() {
                $(this).submit();
            });
        });
    </script>
@endpush