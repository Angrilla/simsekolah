@extends('template')
@section('content')
<main class="container" style="margin-top: 30px">
    <div class="p-5 rounded">
      <h1>Tambah Siswa</h1>
      <a class="btn btn-danger" href="/student/create">Tambah Siswa Baru</a>
      <hr>
      <table class="table table-bordered">
        <tr>
            <td>NIS</td>
            <td><input type="text" name="nis" placeholder="NIS" class="form-control"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" placeholder="nama" class="form-control"></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td><input type="date" name="tanggal_lahir" placeholder="Tanggal Lahir" class="form-control"></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <button type="submit" class="btn btn-danger">Simpan</button>
                <a class="btn btn-success" href="/student">Kembali</a>
            </td>
        </tr>
      </table>
    </div>
  </main>
  @endsection