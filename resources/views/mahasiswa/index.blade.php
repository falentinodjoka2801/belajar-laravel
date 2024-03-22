<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/2.0.2/js/dataTables.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.min.css" />

    <title>Mahasiswa UNPAB</title>
</head>
<body>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <h5>Mahasiswa</h5>
                </div>
                <div class="col text-right">
                    <a href="{{route('mahasiswa.create')}}">
                        <button class="btn btn-success">Mahasiswa Baru</button>
                    </a>
                </div>
            </div>
            <table class='table table-striped' id='tabelMahasiswa'>
                <thead>
                    <tr>
                        <th>No.</th>
                        <th class='text-left'>Nama</th>
                        <th class='text-left'>Stambuk</th>
                        <th class='text-left'>Prodi</th>
                        <th class='text-left'>Konsentrasi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($listMahasiswa as $index => $mahasiswa)
                        <?php
                            $nomorUrut  =   $index + 1;

                            $nama               =   $mahasiswa->mhsNama;
                            $stambuk            =   $mahasiswa->mhsAngkatan;
                            $namaProdi          =   'Sistem Informasi';
                            $namaKonsentrasi    =   'Rekayasa Perangkat Lunak';
                        ?>
                        <tr>
                            <td><b>{{ $nomorUrut }}.</b></td>
                            <td>{{ $nama }}</td>
                            <td>{{ $stambuk }}</td>
                            <td>{{ $namaProdi }}</td>
                            <td>{{ $namaKonsentrasi }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
<script language='Javascript'>
    let _tabelMahasiswa =   $('#tabelMahasiswa');
    
    _tabelMahasiswa.DataTable();
</script>