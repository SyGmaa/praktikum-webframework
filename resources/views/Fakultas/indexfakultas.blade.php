    @extends('layouts.app')
        @section('content')
            <div class="row">
                    <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title">List Fakultas</h4>
                    <p class="card-description">
                        List Fakultas <code>Universitas Pahlawan Tuanku Tambusai</code>
                    </p>
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="mb-3">
                        <a href="{{ route('fakultas.create') }}" class="btn btn-primary">Tambah Fakultas</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover">
                        <thead>
                            <tr>
                            <th>Nama Fakultas</th>
                            <th>Kode Fakultas</th>
                            <th>Jumlah Prodi</th>
                            <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($fakultas as $fakultasItem)
                            <tr>
                            <td>{{ $fakultasItem->nama_fakultas }}</td>
                            <td>{{ $fakultasItem->kode_fakultas }}</td>
                            <td class="text-info">{{ $fakultasItem->prodi_count }}</td>
                            <td>
                                <a href="{{ route('fakultas.show', $fakultasItem->id) }}" class="badge badge-info">Lihat</a>
                                <a href="{{ route('fakultas.edit', $fakultasItem->id) }}" class="badge badge-warning">Edit</a>
                                <form action="{{ route('fakultas.destroy', $fakultasItem->id) }}" method="POST" style="display: inline;">
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