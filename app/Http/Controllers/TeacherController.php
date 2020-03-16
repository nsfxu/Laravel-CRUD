<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\{Classroom, Discipline, Teacher};

class TeacherController extends Controller
{
    
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index()
    {
        $professor = Teacher::all();

        return view('professor.all', compact('professor'));
    }

    public function create()
    {
        $classroom_list = Classroom::pluck('name', 'id');
        $discipline_list = Discipline::pluck('name', 'id');

        return view('professor.create', compact('classroom_list', 'discipline_list'));
    }


    public function edit($id)
    {
        $professor = Teacher::find($id);

        $classroom_list = Classroom::pluck('name', 'id');
        $discipline_list = Discipline::pluck('name', 'id');

        return view('professor.edit', compact('professor', 'classroom_list', 'discipline_list'));

    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'age'  => 'required',
            'class_id' => 'required',
            'discipline_id' => 'required'
        ]);

        $professor = new Teacher([
            'name' => $request->get('name'),
            'age' => $request->get('age'),
            'class_id' => $request->get('class_id'),
            'discipline_id' => $request->get('discipline_id')

        ]);

        $professor->save();
        return redirect('teachers')->with('success', 'Teacher saved!');

    }

    public function show($id)
    {
        $professor = Teacher::find($id);

        return view('professor.show', compact('professor'));
    }    

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'age'  => 'required',
            'class_id' => 'required',
            'discipline_id' => 'required'
        ]);

        $professor = Teacher::find($id);

        $professor->name = $request->get('name');
        $professor->age = $request->get('age');        
        $professor->class_id = $request->get('class_id');        
        $professor->discipline_id = $request->get('discipline_id');        

        $professor->save();

        return redirect('teachers')->with('success', 'Teacher updated!');
    }

    public function destroy($id)
    {
        $professor = Teacher::find($id);
        $professor->delete();

        return redirect('teachers')->with('success', 'Teacher deleted!');
    }
}
