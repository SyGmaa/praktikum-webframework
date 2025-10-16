@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Detail Fakultas</h4>
                    <p class="card-description">
                        Detail Fakultas <code>{{ $fakultas->nama_fakultas }}</code>
                    </p>
                    <div class="mb-3">
                        <a href="{{ route('fakultas.index') }}" class="btn btn-secondary">Kembali</a>
                        <a href="{{ route('fakultas.edit', $fakultas->id) }}" class="btn btn-primary">Edit</a>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Nama Fakultas: {{ $fakultas->nama_fakultas }}</h5>
                        </div>
                        <div class="col-md-6">
                            <h5>Kode Fakultas: {{ $fakultas->kode_fakultas }}</h5>
                        </div>
                    </div>
                    <hr>
                    <h5>List Prodi</h5>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Nama Prodi</th>
                                    <th>Kode Prodi</th>
                                    <th>Jenjang Pendidikan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($fakultas->prodi as $prodi)
                                <tr>
                                    <td>{{ $prodi->nama_prodi }}</td>
                                    <td>{{ $prodi->kode_prodi }}</td>
                                    <td>{{ $prodi->jenjang_pendidikan }}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="3" class="text-center">Tidak ada prodi untuk fakultas ini.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
