@extends('layouts.master')
@section('judul')
    Halaman Data Kategori Menu
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
@include('menu-category.m-add')
@section('content')
    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <button class="btn btn-secondary btn-sm float-right mr-2" title="Tambah Menu"
        data-toggle="modal" data-target="#modal-addCategory"> 
        <i class="fa-solid fa-plus"></i>
    </button>
    List data kategori menu<br><br>
    <table id="example1" class="table table-bordered table-striped">
        <thead class="bg-warning">
            <tr>
                <th>No.</th>
                <th>Nama Menu</th>
                <th style='text-align:center'>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($categories as $key =>  $cat)
                @include('menu-category.m-edit')
                @include('menu-category.m-delete')
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $cat->name }}</td>
                    <td style='text-align:center'>   
                        <button class="btn btn-danger btn-sm" title="Hapus Data" 
                            data-toggle="modal" data-target="#modal-deleteCategory{{ $cat->id }}"> 
                            <i class="fas fa-regular fa-trash"></i>
                        </button>
                        <button class="btn btn-primary btn-sm" title="Edit Data"
                            data-toggle="modal" data-target="#modal-editCategory{{ $cat->id }}">
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
