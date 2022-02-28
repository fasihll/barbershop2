@extends('admin_layout.template')
@section('title', 'Add employes')
@section('css')

@endsection
@section('content')
    <div class="container">
        <h1>Karyawan</h1>
        <div class="box">
            <a href="" class="btn btn-primary"><i class=" fa fa-plus"></i> Tambah Karyawan</a>
            <table class="table table-hover">
                <thead class="">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nik</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Shift</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <a href="" class="btn btn-white fa fa-eye"></a>
                            <a href="" class="btn btn-secondary fa fa-edit"></a>
                            <a href="" class="btn btn-danger fa fa-trash"></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
