<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Tambah Siswa</h1>
    <a href="{{ route('siswa.index') }}">Kembali</a><br><br>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    
    <form action="{{ route('siswa.store') }}" method="POST" enctype="multipart/form-data">
        @csrf <!-- {{ csrf_field() }} -->
        <h2>Akun Siswa</h2>
        <label>Nama Lengkap</label><br>
        <input type="text" id="name" name="name" value="{{ old('name') }}">
        <br><br>

        <label>Email Address</label><br>
        <input type="email" id="email" name="email" value="{{ old('email') }}">
        <br><br>

        <label>Password</label><br>
        <input type="password" id="password" name="password">
        <br><br>

        <label for="password_confirmation" class="col-md-4 col-form-label text-md-end text-start">Confirm Password</label>
        <div class="col-md-6">
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
        </div>
        <br><br>
        
        <h2>Data Siswa</h2>
        <label>Foto Siswa</label><br>
        <input type="file" name="image" accept="image/*" required>
        <br><br>

        <label>NIS Siswa</label><br>
        <input type="text" name="nis" value="{{ old('nis') }}" required>
        <br><br>

        <label>Tingkatan</label><br>
        <select name="tingkatan" required>
            <option value="">Pilih Tingkatan</option>
            <option value="X" {{ old('tingkatan') == 'X' ? 'selected' : '' }}>X</option>
            <option value="XI" {{ old('tingkatan') == 'XI' ? 'selected' : '' }}>XI</option>
            <option value="XII" {{ old('tingkatan') == 'XII' ? 'selected' : '' }}>XII</option>
        </select>
        <br><br>    

        <label>Jurusan</label><br>
        <select name="jurusan" required>
            <option value="">Pilih Jurusan</option>
            <option value="TBSM" {{ old('jurusan') == 'TBSM' ? 'selected' : '' }}>TBSM</option>
            <option value="TJKT" {{ old('jurusan') == 'TJKT' ? 'selected' : '' }}>TJKT</option>
            <option value="PPLG" {{ old('jurusan') == 'PPLG' ? 'selected' : '' }}>PPLG</option>
            <option value="DKV" {{ old('jurusan') == 'DKV' ? 'selected' : '' }}>DKV</option>
            <option value="TOI" {{ old('jurusan') == 'TOI' ? 'selected' : '' }}>TOI</option>
        </select>
        <br><br>
        
        <label>Kelas</label><br>
        <select name="kelas" required>
            <option value="">Pilih Kelas</option>
            <option value="1" {{ old('kelas') == '1' ? 'selected' : '' }}>1</option>
            <option value="2" {{ old('kelas') == '2' ? 'selected' : '' }}>2</option>
            <option value="3" {{ old('kelas') == '3' ? 'selected' : '' }}>3</option>
            <option value="4" {{ old('kelas') == '4' ? 'selected' : '' }}>4</option>
        </select>
        <br><br>
        
        <label>No HP</label><br>
        <input type="text" name="hp" value="{{ old('hp') }}" required>
        <br><br>

        <button type="submit">SIMPAN DATA</button>
        <button type="reset">RESET FORM</button>
    </form>    
</body>
</html>
