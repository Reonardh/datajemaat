<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Jemaat </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <form action="{{ route('posts.edit') }}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <div class="form-group">
                            <label class="font-weight-bold">id</label>
                            <input type="text" class="form-control @error('id') is-invalid @enderror" name="id" value="{{ old('id') }}" placeholder="Masukkan id">

                            <!-- error message untuk title -->
                            @error('id')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Nik</label>
                            <textarea class="form-control @error('nik') is-invalid @enderror" name="nik" rows="5" placeholder="Masukkan Nik">{{ old('nik') }}</textarea>

                            <!-- error message untuk nik -->
                            @error('nik')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div><div class="form-group">
                            <label class="font-weight-bold">Nama Lengkap</label>
                            <textarea class="form-control @error('nama_lengkap') is-invalid @enderror" name="nama_lengkap" rows="5" placeholder="Masukkan Nama lengkap ">{{ old('nama_lengkap') }}</textarea>

                            <!-- error message untuk nm -->
                            @error('nama_lengkap')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                            <div class="mb-3">
                                <label class="font-weight-bold">Jenis Kelamin</label>
                                <select class="form-control" name="jenis_kelamin" >
                                    <option value="L" > Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div><div class="form-group">
                                <label class="font-weight-bold">tempat lahir</label>
                                <textarea class="form-control @error('tempat_lahir') is-invalid @enderror" name="tempat_lahir" rows="5" placeholder="Masukkan Tempat lahir">{{ old('tempat_lahir') }}</textarea>

                                <!-- error message untuk tmpl -->
                                @error('tempat_lahir')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                                <div class="mb-3">
                                    <label class="form-label">Tanggal Lahir</label>
                                    <input require value="<?php echo date('Y-m-d'); ?>" type="date" class="form-control" name="tgllhr" placeholder="Masukkan Tanggal Lahir" />
                                </div>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Status Baptis</label>
                                    <select class="form-control" name="status_baptis" >
                                        <option value="Sudah" >Sudah</option>
                                        <option value="Belum">Belum</option>
                                    </select>
                                    <div class="mb-3">
                                        <label class="form-label">Tanggal Baptis</label>
                                        <input require value="<?php echo date('Y-m-d'); ?>" type="date" class="form-control" name="tanggal_baptis" placeholder="Masukkan Tanggal Pinjam" />
                                    </div>
                                    <div class="mb-3">
                                        <label class="font-weight-bold">Status Sidi</label>
                                        <select class="form-control" name="status_sidi" >
                                            <option value="Sudah" >Sudah</option>
                                            <option value="Belum">Belum</option>
                                        </select>
                                        <div class="mb-3">
                                            <label class="form-label">Tanggal Sidi</label>
                                            <input require value="<?php echo date('Y-m-d'); ?>" type="date" class="form-control" name="tanggal_sidi" placeholder="Masukkan Tanggal Sidi" />
                                        </div>
                                    </div><div class="form-group">
                                        <label class="font-weight-bold">Nama Ayah</label>
                                        <textarea class="form-control @error('nama_ayah') is-invalid @enderror" name="nama_ayah" rows="5" placeholder="Masukkan Nama Ayah">{{ old('nama_ayah') }}</textarea>

                                        <!-- error message untuk nama ayah -->
                                        @error('nama_ayah')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                        @enderror

                                    </div><div class="form-group">
                                        <label class="font-weight-bold">Nama Ibu</label>
                                        <textarea class="form-control @error('nama_ibu') is-invalid @enderror" name="nama_ibu" rows="5" placeholder="Masukkan Nama Ibu">{{ old('nama_ibu') }}</textarea>

                                        <!-- error message untuk nama ibu -->
                                        @error('nama_ibu')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div><div class="form-group">
                                        <label class="font-weight-bold">Alamat</label>
                                        <textarea class="form-control @error('namaayah') is-invalid @enderror" name="alamat" rows="5" placeholder="Masukkan Alamat">{{ old('alamat') }}</textarea>

                                        <!-- error message untuk nama alamat -->
                                        @error('alamat')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                                    <button type="reset" class="btn btn-md btn-warning">RESET</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>
</body>
</html>
