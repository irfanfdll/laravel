    @extends('layouts.master')

@section('title', 'Halaman User')

@section('section')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Halaman Daftar Buku</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Title</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            @foreach ($buku as $data)
            Pengarang Buku : {{$data->pengarang->nama_pengarang}}<br>
            Nama Buku : {{$data->nama_buku}} <br>
            @if ($data->jumlah_halaman > 1)
            Jumlah Halaman Buku : {{$data->jumlah_halaman}} <br>
            @else
            Jumlah Halaman Buku : <b>Belum mempunyai Buku</b><br>
            @endif
            Translate Judul : {!! $item->translate_judul_buku ?? '<b>Translate Tidak Tersedia</b>'!!}<br>   
            <hr>
            @endforeach
                </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <h2><b>Pengarang</b></h2><br>
            @foreach ($pengarang as $data)
            Pengarang Buku : {{$data->nama_pengarang}}<br>
            Email Pengarang : {{$data->email}}<br>
            No telp : {{$data->tlp}}<br>
            <b>Data Buku</b><br>
            @foreach ($data->book as $item)
            @if ($item->jumlah_halaman > 1)
            
            Nama Buku : {{$item->nama_buku}} <br>
            Jumlah Halaman Buku : {{$item->jumlah_halaman}} <br>
            @else
            Jumlah Halaman Buku : <b>Belum mempunyai Buku</b><br>
            @endif
            Translate Judul : {!! $item->translate_judul_buku ?? '<b>Translate Tidak Tersedia</b>'!!}<br>
            @endforeach
            <hr>
            @endforeach
        </div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->
@endsection