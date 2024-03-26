@extends('layout/main')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Mahasiswa</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">List Mahasiswa</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h5 class='mb-1'>List Mahasiswa</h5>
                    <p class="text-sm text-muted mb-0">Daftar Mahasiswa Terdaftar</p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th class='text-center'>No.</th>
                                    <th>Nama</th>
                                    <th>Stambuk</th>
                                    <th>Kontak</th>
                                    <th>Terdaftar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($listMahasiswa as $index => $mhs)
                                    <?php
                                        $nomor  =   $index + 1;
                                    ?>
                                    <tr>
                                        <td class='text-center'><b>{{ $nomor }}.</b></td>
                                        <td>{{ $mhs->mhsNama }}</td>
                                        <td>{{ $mhs->mhsAngkatan }}</td>
                                        <td>{{ $mhs->mhsEmail }}</td>
                                        <td>{{ $mhs->mhsTanggalTerdaftar }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection