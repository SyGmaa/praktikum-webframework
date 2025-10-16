    @extends('layouts.app')
        @section('content')
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                        <h4 class="card-title">Input Dosen</h4>
                        <p class="card-description">
                            Form Input Dosen
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
                        <form class="forms-sample" method="POST" action="{{ route('dosen.store') }}">
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Prodi</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="id_prodi" required>
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
                            <label for="nidn" class="col-sm-3 col-form-label">NIDN</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control @error('nidn') is-invalid @enderror" id="nidn" name="nidn" placeholder="NIDN" value="{{ old('nidn') }}" required>
                                @error('nidn')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            </div>
                            <div class="form-group row">
                            <label for="namadosen" class="col-sm-3 col-form-label">Nama Dosen</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control @error('nama_dosen') is-invalid @enderror" id="exampleInputUsername2" name="nama_dosen" placeholder="Nama Dosen" value="{{ old('nama_dosen') }}" required>
                                @error('nama_dosen')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            </div>
                            <div class="form-group row">
                            <label for="email" class="col-sm-3 col-form-label">Email Dosen</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email Dosen" value="{{ old('email') }}" required>
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            </div>
                            <div class="form-group row">
                            <label for="no_telepon" class="col-sm-3 col-form-label">Nomor Telepon</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control @error('no_telepon') is-invalid @enderror" id="no_telepon" name="no_telepon" placeholder="Nomor Telepon" value="{{ old('no_telepon') }}" required>
                                @error('no_telepon')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            </div>
                            {{-- <div class="form-check form-check-flat form-check-primary">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">
                                Remember me
                            </label>
                            </div> --}}
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <a href="{{ route('dosen.index') }}" class="btn btn-light">Cancel</a>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        @endsection

        {{-- @push('scripts')
        <script src="{{ asset('backend/js/file-upload.js') }}"></script>
        <script src="{{ asset('backend/js/typeahead.js') }}"></script>
        <script src="{{ asset('backend/js/select2.js') }}"></script>
        @endpush --}}
