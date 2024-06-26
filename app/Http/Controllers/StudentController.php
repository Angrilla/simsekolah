<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Jurusan;

class StudentController extends Controller
{
    
    //
    public function index()
    {

        $data['students'] = Student::all(); // select * from student
        return view('student.index',$data);
        return  Student::all();
        return view('student.index');
    }

    public function store(Request $request)
    {
        $student = new Student();
        $student->name = $request->name;
        $student->nis = $request->nis;
        $student->birth_date = $request->birth_date;
        $student->save();
        // dd($student);
        // melakukan redirect ke daftar siswa dan menampilkan alert
        return redirect('student')->with('message','Berhasil Menambahkan Data');
    }

    public function create()

    {
        
        // $student = new Student();
        // $student->name = $request->name;
        // $student->nis = $request->nis;
        // $student->birth_date = $request->birth_date;
        // $student->save();
        // return view('student.create');
        $data['jurusan'] = Jurusan::all();
        return view('student.create', $data);
    }

    public function edit($id)
    {
        $student = Student::find($id);
        if($student==null){
            \Sentry::captureMessage('Student Dengan ID : '.$id.' Tidak Ditemukan');
            return 'Data Tidak Ditemukan';
        }else{

            $data['student'] =  $student;
            return view('student.edit',$data);
    }
}

    public function update (Request $request, $id)
    {
        $student = Student::find($id);
        $student->update($request->all());
        return redirect('success')->with('message','Berhasil Mengubah Data');
    }

    public function destroy($id)
    {
        $student = Student::find($id);
        
        if ($student->delete()) {
            return redirect('student')->with('message','Berhasil Menghapus Data');
        } 
    }
}
