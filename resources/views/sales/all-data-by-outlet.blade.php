@extends('layouts.master')
@section('judul')
    Halaman Data Penjualan {{  $outlet->name }}
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
@section('content')
    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <table id="example1" class="table table-bordered table-striped">
        <thead class="bg-warning">
            <tr>
                <th>No.</th>
                <th style='text-align:center'>Tanggal Penjualan </th>
                <th style='text-align:center'>Total Pendapatan</th>
                <th style='text-align:center'>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($sales as $key =>  $sales)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td align="right"> {{ $sales->sales_date->translatedFormat('l d F Y') }}</td>
                    <td align="right"> Rp. {{ number_format($sales->all_total_price) }} </td>
                    <td style='text-align:center'>   
                        <a href="/penjualan/{{ $sales->outlet->name }}/tanggal/{{ $sales->sales_date->format('Y-m-d') }}" class="btn btn-success btn-sm" title="Cek Detail Data"><i class="fas fa-solid fa-eye"></i></a>
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
