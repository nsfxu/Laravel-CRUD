<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Classroom;

class ClassroomController extends Controller
{
    
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index()
    {
        $classe = Classroom::all();

        return view('classes.all', compact('classe'));
    }

    public function create()
    {
        return view('classes.create');
    }

    public function edit($id)
    {
        $classe = Classroom::find($id);
        
        return view('classes.edit', compact('classe'));

    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $class = new Classroom([
            'name' => $request->get('name')
        ]);

        $class->save();
        return redirect('classrooms')->with('success', 'Classroom saved!');
    }

    public function show($id)
    {
        $classe = Classroom::find($id);

        return view('classes.show', compact('classe'));
    }    

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $class = Classroom::find($id);

        $class->name = $request->get('name');        
        $class->save();

        return redirect('classrooms')->with('success', 'Classroom updated!');
    }

    public function destroy($id)
    {
        $class = Classroom::find($id);
        $class->delete();

        return redirect('classrooms')->with('success', 'Classroom deleted!');
    }
}
