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

    <title>Mahasiswa Baru UNPAB</title>
</head>
<body>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <h5>Mahasiswa Baru</h5>
                </div>
                <div class="col text-left">
                    <a href="{{route('mahasiswa.index')}}">
                        <button class="btn btn-success">List Mahasiswa</button>
                    </a>
                </div>
            </div>
            <form method='post' action="{{route('mahasiswa.store')}}" id="formMahasiswa">
                <div class="form-group mb-3">
                    <label for="nama" class='font-weight-bold'>Nama</label>
                    <input type="text" class="form-control" placeholder='Nama Mahasiswa'
                        class='form-control' name='nama' id='nama' />
                </div>
                <div class="form-group mb-3">
                    <label for="stambuk" class='font-weight-bold'>Stambuk</label>
                    <input type="number" class="form-control" placeholder='Stambuk Mahasiswa'
                        class='form-control' name='stambuk' id='stambuk' />
                </div>
                <div class="form-group mb-3">
                    <label for="prodi" class='font-weight-bold'>Program Study</label>
                    <select name="prodi" id="prodi" class="form-control"
                        data-tingkat='1'
                        data-url='{{ route() }}'>
                        <option value="">-- Pilih Prodi --</option>
                        @foreach ($listProgramStudy as $programStudy)
                            <option value="{{ $programStudy->prodiKode }}">{{ $programStudy->prodiNamaResmi }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="konsentrasi" class='font-weight-bold'>Konsentrasi</label>
                    <select name="konsentrasi" id="konsentrasi" class="form-control"
                        data-tingkat='2'>
                        <option value="">-- Pilih Konsentrasi --</option>
                    </select>
                </div>
                <hr />
                <button class="btn btn-success" type='submit' id='buttonSubmit'>
                    Save
                </button>
            </form>
        </div>
    </div>
</body>
</html>
<script src='{{ asset("custom/js/form-submission.js") }}'></script>
<script src='{{ asset("custom/js/custom-select-box.js") }}'></script>
<script language='Javascript'>
    let _programStudy   =   $('#prodi');
    let _konsentrasi    =   $('#konsentrasi');
</script>