@extends('layouts.master')
@section('judul')
    Halaman Data Penjualan Grabfood
@endsection
@push('scripts')
    <script src="{{ asset('layout/plugins/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('layout/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
    <script>
        $(function() {
            $("#example1").DataTable();
        });
    </script>
@endpush
@push('style')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.5/datatables.min.css" />
@endpush
{{-- @include('menu.m-add') --}}
@section('content')
    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    List data penjualan<br><br>
    <table id="example1" class="table table-bordered table-striped">
        <thead class="bg-warning">
            <tr>
                <th>No.</th>
                <th>Nama Customer</th>
                <th>Nama Outlet</th>
                <th style='text-align:center'>Tanggal Penjualan </th>
                <th style='text-align:center'>Total Pendapatan</th>
                <th style='text-align:center'>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($sales as $key =>  $sales)
                {{-- @include('menu.m-edit')
                @include('menu.m-delete') --}}
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $sales->customer->name }}</td>
                    <td>{{ $sales->outlet->name }}</td>
                    <td align="right"> {{ $sales->sales_date->translatedFormat('l d F Y') }}</td>
                    <td align="right"> Rp. {{ number_format($sales->total_price) }} </td>
                    <td style='text-align:center'>   
                        {{-- <button class="btn btn-danger btn-sm" title="Hapus Data" 
                            data-toggle="modal" data-target="#modal-deleteMenu{{ $menu->id }}"> 
                            <i class="fas fa-regular fa-trash"></i>
                        </button>
                        <button class="btn btn-primary btn-sm" title="Edit Data"
                            data-toggle="modal" data-target="#modal-editMenu{{ $menu->id }}">
                            <i class="fas fa-duotone fa-pen"></i>
                        </button> --}}
                        <a href="/penjualan/{{ $sales->id }}" class="btn btn-success btn-sm" title="Cek Detail Data"><i class="fas fa-solid fa-eye"></i></a>
                    </td>
                </tr>
            @empty
                <h1>Data Kosong</h1>
            @endforelse
        </tbody>
    </table>
    <button class="btn btn-secondary mt-5" onclick="goBack()"><i class=" fas fa-solid fa-arrow-left"></i> Kembali</button>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
@endsection
