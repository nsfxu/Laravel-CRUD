<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\{Classroom, Student};


class StudentController extends Controller
{
    
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index()
    {
        $aluno = Student::all();

        return view('alunos.all', compact('aluno'));
    }

    public function create()
    {
        $classroom_list = Classroom::pluck('name', 'id');
        return view('alunos.create', compact('classroom_list'));
    }


    public function edit($id)
    {
        $aluno = Student::find($id);
        $classroom_list = Classroom::pluck('name', 'id');

        return view('alunos.edit', compact('aluno', 'classroom_list'));

    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'age'  => 'required',
            'class_id' => 'required'
        ]);

        $aluno = new Student([
            'name' => $request->get('name'),
            'age' => $request->get('age'),
            'class_id' => $request->get('class_id')
        ]);

        $aluno->save();
        return redirect('students')->with('success', 'Student saved!');

    }

    public function show($id)
    {
        $aluno = Student::find($id);

        return view('alunos.show', compact('aluno'));
    }    

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'age'  => 'required',
            'class_id' => 'required'
        ]);

        $aluno = Student::find($id);

        $aluno->name = $request->get('name');
        $aluno->age = $request->get('age');        
        $aluno->class_id = $request->get('class_id');        

        $aluno->save();

        return redirect('students')->with('success', 'Student updated!');
    }

    public function destroy($id)
    {
        $aluno = Student::find($id);
        $aluno->delete();

        return redirect('students')->with('success', 'Student deleted!');
    }
}
