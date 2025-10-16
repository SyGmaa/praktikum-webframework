    @extends('layouts.app')
        @section('content')
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                        <h4 class="card-title">Edit Fakultas</h4>
                        <p class="card-description">
                            Form Edit Fakultas
                        </p>
                        <form class="forms-sample" method="POST" action="{{ route('fakultas.update', $fakultas->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nama Fakultas</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="exampleInputUsername2" name="nama_fakultas" value="{{ old('nama_fakultas', $fakultas->nama_fakultas) }}" placeholder="Nama Fakultas">
                            </div>
                            </div>
                            <div class="form-group row">
                            <label for="exampleInputMobile" class="col-sm-3 col-form-label">Kode Fakultas</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="exampleInputMobile" name="kode_fakultas" value="{{ old('kode_fakultas', $fakultas->kode_fakultas) }}" placeholder="Kode Fakultas">
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