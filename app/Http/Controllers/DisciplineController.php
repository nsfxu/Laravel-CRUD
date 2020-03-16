<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Discipline;

class DisciplineController extends Controller
{
    
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index()
    {
        $disciplina = Discipline::all();

        return view('disciplina.all', compact('disciplina'));
    }

    public function create()
    {
        return view('disciplina.create');
    }

    public function edit($id)
    {
        $disciplina = Discipline::find($id);
        
        return view('disciplina.edit', compact('disciplina'));

    }

    public function store(Request $request)
    {
        $request->validate([
            'sigla' => 'required',
            'name' => 'required'
        ]);

        $dis = new Discipline([
            'sigla' => $request->get('sigla'),
            'name' => $request->get('name')
        ]);

        $dis->save();
        return redirect('disciplines')->with('success', 'Discipline saved!');
    }

    public function show($id)
    {
        $disciplina = Discipline::find($id);

        return view('disciplina.show', compact('disciplina'));
    }    

    public function update(Request $request, $id)
    {
        $request->validate([
            'sigla' => 'required',
            'name' => 'required'
        ]);

        $dis = Discipline::find($id);

        $dis->sigla =  $request->get('sigla');
        $dis->name = $request->get('name');
        
        $dis->save();

        return redirect('disciplines')->with('success', 'Discipline updated!');
    }

    public function destroy($id)
    {
        $disciplina = Discipline::find($id);
        $disciplina->delete();

        return redirect('disciplines')->with('success', 'Discipline deleted!');
    }
}
