@extends('layouts.master')
@section('judul')
    Input Penjualan 
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
    @livewire('sales')
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
            $('.select2').select2()
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })
        })
    </script>
@endpush
