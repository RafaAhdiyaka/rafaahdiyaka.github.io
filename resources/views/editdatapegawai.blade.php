@extends('layout.main')

@section('content')
<div class="container">
    <h2 class=" pt-3 mb-4">Tambah Pegawai</h2>
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="/updatedata/{{ $data->id }}">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                            <input type="text" value="{{ $data->name }}" class="form-control" id="exampleInputEmail1" name=" name">
                            @error('name')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Jenis Kelamin </label>
                            <select class="form-select" name="jeniskelamin" aria-label="Default select example" style="width:100%">
                                <option selected>{{ $data->jeniskelamin }}</option>
                                <option value="laki-laki">laki-laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">No Telepon</label>
                                <input type="number" value="{{ $data->notelepon }}" class="form-control" id="exampleInputEmail1" name=" notelepon">
                                @error('notelepon')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

            </div>
        </div>
    </div>


</div>
@endsection