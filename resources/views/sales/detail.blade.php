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
        {{-- @include('private.production.cutting.m-progress-done')
        @include('private.production.cutting-detail.m-add-material') --}}
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
                {{-- <tr>
                    <td colspan="3">
                        <a href="/produksi/cutting/{{ $pd->id }}/edit" class="btn btn-primary btn-sm float-right mr-3"
                            data-toggle="modal" data-target="#modal-progressDone"><i class="fa-solid fa-pen-to-square"></i> Edit Data
                        </a>
                    </td>
                </tr> --}}
            </table>
        </div><br>
        {{-- <div class="col-sm-12">
            <a href="/produksi/cutting/detail/tambah-material/{{ $pd->id }}" class="btn btn-success btn-sm float-right mr-2 mb-3"
                data-toggle="modal" data-target="#modal-addMaterial"><i class="fa-solid fa-square-plus"></i> Tambah Bahan Yang Dipakai
            </a>
        </div> --}}
        <b>Detail data menu yang dipesan</b>
        <div class="card col-sm-10 mt-3">   
            {{-- <a href="/produksi/cutting/detail/tambah-material/{{ $pd->id }}" class="btn btn-primary">Tambah Data Bahan Yang Dipakai</a><br><br> --}}
            
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Menu</th>
                            <th>Kategori Menu</th>
                            <th style='text-align:center'>Jumlahh</th>
                            {{-- <th style='text-align:center'>Aksi</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($sale->salesDetail as $key => $salDet)
                            {{-- @include('private.production.cutting-detail.m-edit-detail')
                            @include('private.production.cutting-detail.m-delete-detail') --}}
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>{{ $salDet->menu->name }}</td>
                                <td>{{ $salDet->menu->menuCategory->name }}</td>
                                <td align="right">{{$salDet->qty }} Pcs</td>
                                {{-- <td style='text-align:center'>
                                    @if($pdDet->info == "On Progress")
                                        <button class="btn btn-danger btn-sm" data-toggle="modal" 
                                            data-target="#modal-deleteDetail{{ $pdDet->id }}" title="Hapus Datas">
                                            <i class="fas fa-regular fa-trash"></i>
                                        </button>
                                        <button class="btn btn-primary btn-sm" data-toggle="modal" 
                                            data-target="#modal-editDetail{{ $pdDet->id }}" title="Edit Datas">
                                            <i class="fas fa-duotone fa-pen"></i> 
                                        </button>
                                    @else
                                    <button class="btn btn-secondary btn-m"><i class="fa-solid fa-lock"></i></button>
                                    @endif
                                </td> --}}
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
    <script>
        $(function () {
          //Initialize Select2 Elements
          $('.select2bs4').select2({
            theme: 'bootstrap4'
          })
        })
    </script>
@endpush
  
