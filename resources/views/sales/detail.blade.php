@extends('layouts.master')
@section('judul')
    Halaman Detail Data Penjualan
@endsection
@push('style')
    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset('layout/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{asset('layout/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
@endpush
@section('content')
    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    @foreach ($sales as  $sale)
        @include('sales.m-edit')
        @include('sales.sales-detail.m-add')
        <b>Detail data penjualan dengan data berikut</b><br><br>
        <div class="col-sm-6"> 
            <table class="table table-borderless">
                <tr>
                    <td>Nama Pelanggan</td>
                    <td>:</td>
                    <td>{{ $sale->customer->name }}</td>
                </tr>
                <tr>
                    <td>Outlet</td>
                    <td>:</td>
                    <td>{{ $sale->outlet->name }}</td>
                </tr>
                <tr>
                    <td>Nomor Pesanan</td>
                    <td>:</td>
                    <td>{{ $sale->no_order }}</td>
                </tr>
                <tr>
                    <td>Tanggal Penjualan</td>
                    <td>:</td>
                    <td>{{ $sale->sales_date->translatedFormat('l d F Y') }}</td>  
                </tr>
                <tr>
                    <td>Total Penjualan</td>
                    <td>:</td>
                    <td>{{ number_format($sale->total_price) }}</td>  
                </tr>
                <tr>
                    <td colspan="3">
                        <button class="btn btn-primary btn-s float-right" data-toggle="modal" 
                            data-target="#modal-editSales{{ $sale->id }}" title="Edit Data">
                            <i class="fas fa-duotone fa-pen"></i> Edit Data
                        </button>
                    </td>
                </tr>
            </table>
        </div><br>
        <button  class="btn btn-success btn-s float-right mr-2 mb-3" data-toggle="modal" 
            data-target="#modal-addDetail{{ $sale->id }}" title="Add Detail Sales">
            <i class="fa-solid fa-square-plus"></i> Tambah Bahan Yang Dipakai
        </button>
        <b>Detail data menu yang dipesan</b>
        <div class="card col-sm-10 mt-3">   
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Menu</th>
                            <th>Kategori Menu</th>
                            <th style='text-align:center'>Jumlah</th>
                            <th style='text-align:center'>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($sale->salesDetails as $key => $salDet)
                            @include('sales.sales-detail.m-edit')
                            @include('sales.sales-detail.m-delete')
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>{{ $salDet->menu->name }}</td>
                                <td>{{ $salDet->menu->menuCategory->name }}</td>
                                <td align="right">{{$salDet->qty }} Pcs</td>
                                <td style='text-align:center'>
                                    <button class="btn btn-danger btn-sm" data-toggle="modal" 
                                        data-target="#modal-deleteDetail{{ $salDet->id }}" title="Hapus Datas">
                                        <i class="fas fa-regular fa-trash"></i>
                                    </button>
                                    <button class="btn btn-primary btn-sm" data-toggle="modal" 
                                        data-target="#modal-editDetail{{ $salDet->id }}" title="Edit Datas">
                                        <i class="fas fa-duotone fa-pen"></i> 
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <h1>Data Kosong</h1>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        
    @endforeach
    <button class="btn btn-secondary mt-5" onclick="goBack()"><i class=" fas fa-solid fa-arrow-left"></i> Kembali</button>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
@endsection

@push('scripts')
    <!-- Bootstrap 4 -->
    <script src="{{asset('layout/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Select2 -->
    <script src="{{asset('layout/plugins/select2/js/select2.full.min.js') }}"></script>
    <!-- Pemisah Titik -->
    <script src="{{asset('js/my.js') }}"></script>
    <script>
        $(function () {
          //Initialize Select2 Elements
          $('.select2bs4').select2({
            theme: 'bootstrap4'
          })
        })
    </script>
@endpush
  
