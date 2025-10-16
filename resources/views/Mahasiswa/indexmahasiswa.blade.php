@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">List Mahasiswa</h4>
                    <p class="card-description">
                        List Mahasiswa <code>Universitas Pahlawan Tuanku Tambusai</code>
                    </p>
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="mb-3">
                        <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary">Tambah Mahasiswa</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>NIM</th>
                                    <th>Nama Mahasiswa</th>
                                    <th>Angkatan</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Prodi</th>
                                    <th>Dosen PA</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($mahasiswas as $mahasiswa)
                                <tr>
                                    <td>{{ $mahasiswa->nim }}</td>
                                    <td>{{ $mahasiswa->nama_mahasiswa }}</td>
                                    <td>{{ $mahasiswa->angkatan }}</td>
                                    <td>{{ $mahasiswa->email }}</td>
                                    <td>{{ $mahasiswa->status_mahasiswa }}</td>
                                    <td>{{ $mahasiswa->prodi->nama_prodi }}</td>
                                    <td>{{ $mahasiswa->dosenPA ? $mahasiswa->dosenPA->nama_dosen : '-' }}</td>
                                    <td>
                                        <a href="{{ route('mahasiswa.show', $mahasiswa->nim) }}" class="badge badge-info">Lihat</a>
                                        <a href="{{ route('mahasiswa.edit', $mahasiswa->nim) }}" class="badge badge-warning">Edit</a>
                                        <form action="{{ route('mahasiswa.destroy', $mahasiswa->nim) }}" method="POST" style="display: inline;">
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
