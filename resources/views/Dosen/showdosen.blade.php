@extends('layouts.app')
        @section('content')
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                        <h4 class="card-title">Detail Dosen</h4>
                        <p class="card-description">
                            Detail Dosen <code>{{ $dosen->nama_dosen }}</code>
                        </p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>NIDN</label>
                                    <p>{{ $dosen->nidn }}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama Dosen</label>
                                    <p>{{ $dosen->nama_dosen }}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <p>{{ $dosen->email }}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>No Telepon</label>
                                    <p>{{ $dosen->no_telepon }}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Prodi</label>
                                    <p>{{ $dosen->prodi->nama_prodi }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h5>Mahasiswa yang Dibimbing</h5>
                                @if($dosen->mahasiswa->count() > 0)
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>NIM</th>
                                                <th>Nama Mahasiswa</th>
                                                <th>Angkatan</th>
                                                <th>Email</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($dosen->mahasiswa as $mahasiswa)
                                                <tr>
                                                    <td>{{ $mahasiswa->nim }}</td>
                                                    <td>{{ $mahasiswa->nama_mahasiswa }}</td>
                                                    <td>{{ $mahasiswa->angkatan }}</td>
                                                    <td>{{ $mahasiswa->email }}</td>
                                                    <td>{{ $mahasiswa->status_mahasiswa }}</td>
                                                    <td>
                                                        <a href="{{ route('mahasiswa.show', $mahasiswa->nim) }}" class="btn btn-sm btn-info">Lihat</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                @else
                                    <p>Tidak ada mahasiswa yang dibimbing.</p>
                                @endif
                            </div>
                        </div>
                        <a href="{{ route('dosen.index') }}" class="btn btn-secondary">Kembali</a>
                        <a href="{{ route('dosen.edit', $dosen->nidn) }}" class="btn btn-primary">Edit</a>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
