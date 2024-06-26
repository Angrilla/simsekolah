@extends('template')
@section('content')
<main class="container" style="margin-top: 30px">
    <form action="/student/{{$student->id}}" method="POST">
        <input type="hidden" name="_method" value="PUT">
        @csrf
        {{-- @method('PUT') --}}
    <div class="p-5 rounded">
      <h1>Edit Siswa</h1>
      <hr>
      <table class="table table-bordered">
        <tr>
            <td>NIS</td>
            <td><input type="text" value="{{$student->nis}}" name="nis" placeholder="NIS" class="form-control"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="name" value="{{$student->name}}" placeholder="nama" class="form-control"></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td><select name="jurusan_id" class="form-control">
                <option value="0">Pilih Data</option>
                @foreach ($jurusan as $item)
                    <option value="{{$item->id}}">{{$item->nama_jurusan}}</option>
                @endforeach
            </select></td>

        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td><input type="date" name="birth_date" value="{{$student->birth_date}}" placeholder="Tanggal Lahir" class="form-control"></td>
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
</form>
  </main>
  @endsection
