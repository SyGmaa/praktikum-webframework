    @extends('layouts.app')
        @section('content')
            <div class="row">
                    <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title">List Prodi</h4>
                    <p class="card-description">
                        List Prodi <code>Universitas Pahlawan Tuanku Tambusai</code>
                    </p>
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="mb-3">
                        <a href="{{ route('prodi.create') }}" class="btn btn-primary">Tambah Prodi</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover">
                        <thead>
                            <tr>
                            <th>Nama Prodi</th>
                            <th>Kode Prodi</th>
                            <th>Jenjang Pendidikan</th>
                            <th>Fakultas</th>
                            <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($prodis as $prodi)
                            <tr>
                            <td>{{ $prodi->nama_prodi }}</td>
                            <td>{{ $prodi->kode_prodi }}</td>
                            <td>{{ $prodi->jenjang_pendidikan }}</td>
                            <td>{{ $prodi->fakultas->nama_fakultas }}</td>
                            <td>
                                <a href="{{ route('prodi.show', $prodi->id) }}" class="badge badge-info">Lihat</a>
                                <a href="{{ route('prodi.edit', $prodi->id) }}" class="badge badge-warning">Edit</a>
                                <form action="{{ route('prodi.destroy', $prodi->id) }}" method="POST" style="display: inline;">
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
