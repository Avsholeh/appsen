@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Jabatan</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officiis iste asperiores fuga hic sunt at expedita nisi numquam assumenda et cum culpa quisquam porro, ut eum iusto labore deleniti inventore?
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
