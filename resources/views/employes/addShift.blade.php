@extends('admin_layout.template')
@section('title', 'Add employes')
@section('css')

@endsection
@section('content')
    <div class="container">
        <h2>Tambah Shift</h2>
        <div class="box form-group col-md-12 p-3 py-4 shadow">
            <div class="col-md-6">
                <form action="/shift/insert" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama_shift" id="nama"
                            class="form-control @error('nama_shift') is-invalid @enderror"
                            value="{{ old('nama_shift') }}">
                        <div class="invalid-feedback">
                            @error('nama_shift')
                                {{ $message }}
                            @enderror
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="jamMulai">Jam Mulai</label>
                        <input type="time" name="jam_mulai" id="jamMulai"
                            class="form-control @error('jam_mulai') is-invalid @enderror" value="{{ old('jam_mulai') }}">
                        <div class="invalid-feedback">
                            @error('jam_mulai')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="jamAkhir">Jam AKhir</label>
                        <input type="time" name="jam_akhir" id="jamAkhir"
                            class="form-control @error('jam_akhir') is-invalid @enderror" value="{{ old('jam_akhir') }}">
                        <div class="invalid-feedback">
                            @error('jam_akhir')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-success mt-3">Submit</button>
                    <a href="{{ route('shift') }}" class="btn btn-danger mt-3">Back</a>
                </form>
            </div>
        </div>
    </div>
@endsection
