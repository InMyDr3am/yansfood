@extends('layouts.master')
@section('judul')
    Halaman Rekap Data Penjualan
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
    <b>Rekap data penjualan all outlet tanggal {{ $sales_date }}</b><br><br>
    <table id="example1" class="table table-bordered table-striped">
        <thead class="bg-warning">
            <tr>
                <th>No.</th>
                <th>Nama Customer</th>
                <th>Nama Outlet</th>
                <th>Menu Terjual</th>
                <th style='text-align:center'>Total Pendapatan</th>
                <th style='text-align:center'>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($sales as $key =>  $sale)
                {{-- @include('menu.m-edit')
                @include('menu.m-delete') --}}
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $sale->customer->name }}</td>
                    <td>{{ $sale->outlet->name }}</td>
                    <td>
                        @foreach ($sale->salesDetails as $key =>  $saleDet)
                            {{ $key + 1 }}.  {{ $saleDet->menu->name }} - {{ $saleDet->qty }} pcs <br>
                        @endforeach
                    </td>
                    <td align="right"> Rp. {{ number_format($sale->total_price) }} </td>
                    <td style='text-align:center'>   
                        <a href="/penjualan/detail-penjualan/{{ $sale->id }}" class="btn btn-success btn-sm" title="Cek Detail Data"><i class="fas fa-solid fa-eye"></i></a>
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
