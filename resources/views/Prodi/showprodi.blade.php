@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Detail Prodi</h4>
                    <p class="card-description">
                        Detail Prodi <code>{{ $prodi->nama_prodi }}</code>
                    </p>
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Nama Prodi:</h5>
                            <p>{{ $prodi->nama_prodi }}</p>
                        </div>
                        <div class="col-md-6">
                            <h5>Kode Prodi:</h5>
                            <p>{{ $prodi->kode_prodi }}</p>
                        </div>
                        <div class="col-md-6">
                            <h5>Jenjang Pendidikan:</h5>
                            <p>{{ $prodi->jenjang_pendidikan }}</p>
                        </div>
                        <div class="col-md-6">
                            <h5>Fakultas:</h5>
                            <p>{{ $prodi->fakultas->nama_fakultas }}</p>
                        </div>
                    </div>
                    <div class="mt-3">
                        <a href="{{ route('prodi.index') }}" class="btn btn-secondary">Kembali</a>
                        <a href="{{ route('prodi.edit', $prodi->id) }}" class="btn btn-primary">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
