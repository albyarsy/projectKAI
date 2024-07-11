@extends('layout.main')
<!-- START DATA -->
@section('contain')
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <!-- FORM PENCARIAN -->
    <div class="pb-3">
        <div class="mb-3">
            <a href="{{ url('/home') }}"  class='btn btn-success'>Menu</a>
        </div>
        <form class="d-flex" action="{{ url('tabel') }}" method="get">
            <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
            <button class="btn btn-secondary" type="submit">Cari</button>
        </form>
    </div>
    
    <!-- TOMBOL TAMBAH DATA -->
    <div class="pb-3">
        <a href='{{ url('tabel/create') }}' class="btn btn-primary">+ Tambah Data</a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th class="col-md-1">No</th>
                <th class="col-md-3">IP Address</th>
                <th class="col-md-4">Unit</th>
                <th class="col-md-2">Alamat</th>
                <th class="col-md-2">OS</th>
                <th class="col-md-2">Admin</th>
                <th class="col-md-2">Toka</th>
                <th class="col-md-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            {{ $i = $data->firstItem() }}
            @foreach ($data as $item)
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $item->ip }}</td>
                <td>{{ $item->unit }}</td>
                <td>{{ $item->alamat }}</td>
                <td>{{ $item->os }}</td>
                <td>{{ $item->admin }}</td>
                <td>{{ $item->toka }}</td>
                <td>
                    <div class="mt-2">
                        <a href='{{ url('tabel/'.$item->ip.'/edit') }}' class="btn btn-warning btn-sm">Edit</a>
                    </div>
                    <form onsubmit="return confirm('Apakah anda yakin?')" class='mt-2' action="{{ url('tabel/'.$item->ip) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" name="submit" class="btn btn-danger btn-sm">
                            Del
                        </button>
                    </form>
                </td>
            </tr>
            {{ $i++ }}
            @endforeach
        </tbody>
    </table>
    {{ $data->withQueryString()->links() }}
</div>
<!-- AKHIR DATA -->
@endsection