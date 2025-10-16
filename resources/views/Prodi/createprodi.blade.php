    @extends('layouts.app')
        @section('content')
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                        <h4 class="card-title">Input Prodi</h4>
                        <p class="card-description">
                            Form Input Prodi
                        </p>
                        <form class="forms-sample" method="POST" action="{{ route('prodi.store') }}">
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Fakultas</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="fakultas_id" required>
                                        <option value="">Pilih Fakultas</option>
                                        @foreach($fakultas as $fak)
                                            <option value="{{ $fak->id }}" {{ old('fakultas_id') == $fak->id ? 'selected' : '' }}>{{ $fak->nama_fakultas }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                            <label for="namaprodi" class="col-sm-3 col-form-label">Nama Prodi</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="exampleInputUsername2" name="nama_prodi" placeholder="Nama Prodi" value="{{ old('nama_prodi') }}" required>
                            </div>
                            </div>
                            <div class="form-group row">
                            <label for="kodeprodi" class="col-sm-3 col-form-label">Kode Prodi</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="exampleInputMobile" name="kode_prodi" placeholder="Kode Prodi" value="{{ old('kode_prodi') }}" required>
                            </div>
                            </div>
                            <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Jenjang Pendidikan</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="jenjang_pendidikan" required>
                                    <option value="">Pilih Jenjang</option>
                                    <option value="D3" {{ old('jenjang_pendidikan') == 'D3' ? 'selected' : '' }}>D3</option>
                                    <option value="D4" {{ old('jenjang_pendidikan') == 'D4' ? 'selected' : '' }}>D4</option>
                                    <option value="S1" {{ old('jenjang_pendidikan') == 'S1' ? 'selected' : '' }}>S1</option>
                                    <option value="S2" {{ old('jenjang_pendidikan') == 'S2' ? 'selected' : '' }}>S2</option>
                                    <option value="S3" {{ old('jenjang_pendidikan') == 'S3' ? 'selected' : '' }}>S3</option>
                                </select>
                            </div>
                            </div>
                            {{-- <div class="form-check form-check-flat form-check-primary">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">
                                Remember me
                            </label>
                            </div> --}}
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <button class="btn btn-light">Cancel</button>
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
