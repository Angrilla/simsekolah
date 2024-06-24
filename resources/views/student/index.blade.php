@extends('template')
@section('content')
      <main class="container">
        <div class="p-5 rounded">
          <h1>Daftar Siswa</h1>
          <a class="btn btn-danger" href="/student/create">Tambah Siswa Baru</a>
          <hr>
          <table class="table table-bordered">
            <tr>
                <th>Nomor</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
            </tr>
            <tr>
                <td>1</td>
                <td>TI002</td>
                <td>Nuris Akbar</td>
                <td>1999-01-01</td>
            </tr>
            <tr>
                <td>2</td>
                <td>TI002</td>
                <td>Asep Sahruddin</td>
                <td>1999-01-02</td>
            </tr>
          </table>
        </div>
      </main>
@endsection