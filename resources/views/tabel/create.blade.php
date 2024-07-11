@extends('layout.main')
@section('contain')
@if ($errors->any())
    <div class="pt-3">
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif
<!-- START FORM -->
<form action='{{ url('tabel') }}' method='post'>
    @csrf
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <a href="{{ url('tabel') }}"  class='btn btn-secondary'><<-- Kembali </a>
        <div class="mb-3 row">
            <label for="ip" class="col-sm-2 col-form-label">IP Address</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='ip' value='{{ Session::get('ip') }}' id="ip">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="unit" class="col-sm-2 col-form-label">Unit</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='unit' value='{{ Session::get('unit') }}' id="unit">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='alamat' value='{{ Session::get('alamat') }}' id="alamat">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="os" class="col-sm-2 col-form-label">Operating System</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='os' value='{{ Session::get('os') }}' id="os">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="admin" class="col-sm-2 col-form-label">Admin</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='admin' value='{{ Session::get('admin') }}' id="admin">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="toka" class="col-sm-2 col-form-label">Toka</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name='toka' value='{{ Session::get('toka') }}' id="toka">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jurusan" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
        </div>
    </div>
    </form>
        <!-- AKHIR FORM -->
@endsection
