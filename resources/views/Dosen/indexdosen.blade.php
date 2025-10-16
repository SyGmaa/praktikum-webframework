@extends('layouts.app')
        @section('content')
            <div class="row">
                    <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title">List Dosen</h4>
                    <p class="card-description">
                        List Dosen <code>Universitas Pahlawan Tuanku Tambusai</code>
                    </p>
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="mb-3">
                        <a href="{{ route('dosen.create') }}" class="btn btn-primary">Tambah Dosen</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover">
                        <thead>
                            <tr>
                            <th>NIDN</th>
                            <th>Nama Dosen</th>
                            <th>Email</th>
                            <th>No Telepon</th>
                            <th>Prodi</th>
                            <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dosens as $dosen)
                            <tr>
                            <td>{{ $dosen->nidn }}</td>
                            <td>{{ $dosen->nama_dosen }}</td>
                            <td>{{ $dosen->email }}</td>
                            <td>{{ $dosen->no_telepon }}</td>
                            <td>{{ $dosen->prodi->nama_prodi }}</td>
                            <td>
                                <a href="{{ route('dosen.show', $dosen->nidn) }}" class="badge badge-info">Lihat</a>
                                <a href="{{ route('dosen.edit', $dosen->nidn) }}" class="badge badge-warning">Edit</a>
                                <form action="{{ route('dosen.destroy', $dosen->nidn) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="badge badge-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</button>
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
            </div>
        @endsection
