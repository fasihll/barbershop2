@extends('admin_layout.template')
@section('title', 'shift')
@section('css')

@endsection
@section('content')
    <div class="container">
        @if (session('pesan'))
            <div class="alert alert-success" role="alert">
                {{ session('pesan') }}
            </div>
        @endif
        <h1>Shift</h1>
        <div class="box">
            <a href="/shift/tambah" class="btn btn-primary"><i class=" fa fa-plus"></i> Tambah Shift</a>
            <table class="table table-hover">
                <thead class="">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Shift</th>
                        <th scope="col">Jam Kerja</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    @foreach ($shift as $s)

                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $s->nama_shift }}</td>
                            <td>{{ $s->jam_mulai }} sd {{ $s->jam_akhir }}</td>
                            <td>
                                <a href="/shift/edit/{{ $s->id }}" class="btn btn-secondary fa fa-edit"></a>
                                <a href="/shift/delete/{{ $s->id }}" class="btn btn-danger fa fa-trash"
                                    onclick="return confirm('Apakah anda Yakin')"></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
