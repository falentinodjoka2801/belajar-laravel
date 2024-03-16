<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content='ie=edge'>
    <title>Tambah Data POST - SantriKoding.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
</head>
<body style='background: lightgray'>
    <div class="mb-5 mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{route('posts.store')}}" method='POST'
                            enctype='multipart/form-data'>
                            @csrf
                            <div class="form-group">
                                <label for="gambar" class="form-weight-bold">GAMBAR</label>
                                <input type="file" class='form-control @error("image") is-invalid @enderror' name="image" id="image">
                            
                                @error('image')
                                    <div class='alert alert-danger mt-2'>
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="judul" class="font-weight-bold">Judul</label>
                                <input type="text" class='form-control @error("title") is-invalid @enderror'
                                    name='title' value='{{old("title")}}' placeholder='Masukkan Judul Post' />

                                @error('title')
                                    <div class="alert alert-danger mt-2">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="content" class='font-weight-bold'>Konten</label>
                                <textarea name="content" id="content"
                                    class='form-control @error("content") is-invalid @enderror'
                                    placeholder='Masukkan Konten Post'>{{old("content")}}</textarea>
                                
                                    @error("content")
                                        <div class="alert alert-danger mt-2">{{$message}}</div>
                                    @enderror
                            </div>
                            <button type='submit' class="btn btn-primary btn-md">Simpan</button>
                            <button type='reset' class="btn btn-warning btn-md">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script language='Javascript'>
    CKEDITOR.replace( 'content' );
</script>