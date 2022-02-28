@extends('admin_layout/template')
@section('title', 'Dashboard | Polkah')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endsection
@section('content')

    <div class="container p-2">
        <h2 class="">Dashboard</h2>
        <div class="row card-dashboard p-3" align="center">
            <div class="col">
                <h6>Employes</h6>
                <h4>20</h4>
            </div>
            <div class="col">
                <h6>Hairstyle</h6>
                <h4>21</h4>
            </div>
            <div class="col">
                <h6>Testimoni</h6>
                <h4>250</h4>
            </div>
            <div class="col">
                <h6>Shfit</h6>
                <h4>3</h4>
            </div>
        </div>
    </div>



@endsection
