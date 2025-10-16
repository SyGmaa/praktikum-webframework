@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Detail Mahasiswa</h4>
                    <p class="card-description">
                        Detail Mahasiswa <code>{{ $mahasiswa->nama_mahasiswa }}</code>
                    </p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label><strong>NIM:</strong></label>
                                <p>{{ $mahasiswa->nim }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label><strong>Nama Mahasiswa:</strong></label>
                                <p>{{ $mahasiswa->nama_mahasiswa }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label><strong>Angkatan:</strong></label>
                                <p>{{ $mahasiswa->angkatan }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label><strong>Email:</strong></label>
                                <p>{{ $mahasiswa->email }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label><strong>Status Mahasiswa:</strong></label>
                                <p>{{ $mahasiswa->status_mahasiswa }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label><strong>Prodi:</strong></label>
                                <p>{{ $mahasiswa->prodi->nama_prodi }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label><strong>Dosen PA:</strong></label>
                                <p>{{ $mahasiswa->dosenPA ? $mahasiswa->dosenPA->nama_dosen : '-' }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label><strong>Alamat:</strong></label>
                                <p>{{ $mahasiswa->alamat }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Kembali</a>
                        <a href="{{ route('mahasiswa.edit', $mahasiswa->nim) }}" class="btn btn-primary">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
