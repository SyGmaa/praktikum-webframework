@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Input Mahasiswa</h4>
                    <p class="card-description">
                        Form Input Mahasiswa
                    </p>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form class="forms-sample" method="POST" action="{{ route('mahasiswa.store') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="nim" class="col-sm-3 col-form-label">NIM</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" name="nim" placeholder="NIM" value="{{ old('nim') }}" required>
                                @error('nim')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama_mahasiswa" class="col-sm-3 col-form-label">Nama Mahasiswa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control @error('nama_mahasiswa') is-invalid @enderror" id="nama_mahasiswa" name="nama_mahasiswa" placeholder="Nama Mahasiswa" value="{{ old('nama_mahasiswa') }}" required>
                                @error('nama_mahasiswa')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="angkatan" class="col-sm-3 col-form-label">Angkatan</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control @error('angkatan') is-invalid @enderror" id="angkatan" name="angkatan" placeholder="Angkatan" value="{{ old('angkatan') }}" required>
                                @error('angkatan')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                            <div class="col-sm-9">
                                <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" placeholder="Alamat" rows="3" required>{{ old('alamat') }}</textarea>
                                @error('alamat')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Status Mahasiswa</label>
                            <div class="col-sm-9">
                                <select class="form-control @error('status_mahasiswa') is-invalid @enderror" name="status_mahasiswa" required>
                                    <option value="">Pilih Status</option>
                                    <option value="Aktif" {{ old('status_mahasiswa') == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                                    <option value="Tidak Aktif" {{ old('status_mahasiswa') == 'Tidak Aktif' ? 'selected' : '' }}>Tidak Aktif</option>
                                    <option value="Cuti" {{ old('status_mahasiswa') == 'Cuti' ? 'selected' : '' }}>Cuti</option>
                                    <option value="Lulus" {{ old('status_mahasiswa') == 'Lulus' ? 'selected' : '' }}>Lulus</option>
                                </select>
                                @error('status_mahasiswa')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Prodi</label>
                            <div class="col-sm-9">
                                <select class="form-control @error('id_prodi') is-invalid @enderror" name="id_prodi" required>
                                    <option value="">Pilih Prodi</option>
                                    @foreach($prodis as $p)
                                        <option value="{{ $p->id }}" {{ old('id_prodi') == $p->id ? 'selected' : '' }}>{{ $p->nama_prodi }}</option>
                                    @endforeach
                                </select>
                                @error('id_prodi')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Dosen PA</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="nidn_pa">
                                    <option value="">Pilih Dosen PA (Opsional)</option>
                                    @foreach($dosens as $d)
                                        <option value="{{ $d->nidn }}" {{ old('nidn_pa') == $d->nidn ? 'selected' : '' }}>{{ $d->nama_dosen }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <a href="{{ route('mahasiswa.index') }}" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
