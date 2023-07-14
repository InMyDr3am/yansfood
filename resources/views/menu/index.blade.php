@extends('layouts.master')
@section('judul')
    Halaman Data Menu
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
@include('menu.m-add')
@section('content')
    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    {{-- <a href="/menu/create" class="btn btn-secondary btn-sm float-right mr-2" title="Tambah Menu"><i class="fa-solid fa-plus"></i></a> --}}
    <button class="btn btn-secondary btn-sm float-right mr-2" title="Tambah Menu"
        data-toggle="modal" data-target="#modal-addMenu"> 
        <i class="fa-solid fa-plus"></i>
    </button>
    List data menu<br><br>
    <table id="example1" class="table table-bordered table-striped">
        <thead class="bg-warning">
            <tr>
                <th>No.</th>
                <th>Nama Menu</th>
                <th>Kategori </th>
                <th style='text-align:center'>Quantity</th>
                <th style='text-align:center'>Status</th>
                <th style='text-align:center'>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($menus as $key =>  $menu)
                @include('menu.m-edit')
                @include('menu.m-delete')
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $menu->name }}</td>
                    <td>{{ $menu->menuCategory->name }}</td>
                    <td align="right"> 100 pcs</td>
                    <td align="right">Aman</td>
                    <td style='text-align:center'>   
                        <button class="btn btn-danger btn-sm" title="Hapus Data" 
                            data-toggle="modal" data-target="#modal-deleteMenu{{ $menu->id }}"> 
                            <i class="fas fa-regular fa-trash"></i>
                        </button>
                        <button class="btn btn-primary btn-sm" title="Edit Data"
                            data-toggle="modal" data-target="#modal-editMenu{{ $menu->id }}">
                            <i class="fas fa-duotone fa-pen"></i>
                        </button>
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
