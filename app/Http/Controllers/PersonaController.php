<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Persona;
use App\Http\Requests\PersonaRequest;
class PersonaController extends Controller
{
    public function index(){
      $personas=Persona::orderBy('id','ASC')->paginate();
      return view('personas.index',compact('personas'));
    }
    public function create()
    {
    return view('personas.create');
     }


  public function store(PersonaRequest $request){
  $persona=new Persona;
  $persona->ci=$request->ci;
  $persona->nombres=$request->nombres;
  $persona->apellidos=$request->apellidos;
  $persona->save();
  return redirect()->route('personas.index')
                ->with('info','El registro fue guardado');
}


  public function edit($id)
  {
    $persona=Persona::find($id);
    return view('personas.edit',compact('persona'));
  }
  public function update(PersonaRequest $request,$id){
    $persona=Persona::find($id);
    $persona->ci=$request->ci;
    $persona->nombres=$request->nombres;
    $persona->apellidos=$request->apellidos;
    $persona->save();
    return redirect()->route('personas.index')->with('info','El registro fue actualizado');
  }
    public function show($id)
      {
        $persona=Persona::find($id);
        return view('personas.show',compact('persona'));
      }
      public function destroy($id)
    {
      $persona=Persona::find($id);
      $persona->delete();

      return back()->with('info','La persona fue eliminada del registro');
    }

  }
