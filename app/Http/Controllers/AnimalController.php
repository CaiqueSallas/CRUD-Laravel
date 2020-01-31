<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Animal;
use App\Especie;
use App\Habitat;
class AnimalController extends Controller
{
    public function index() 
    {
        $animais = Animal::all();
        $especies = Especie::all();
        $habitats = Habitat::all();
        $total = Animal::all()->count();
        return view('list-animais', compact('animais','especies','habitats','total'));
    }

    public function create() 
    {
    	$especies = Especie::all();
        $habitats = Habitat::all();
        return view('include-animal', compact('especies','habitats'));
    }

    public function store(Request $request) 
    {
        $animal = new Animal;
        $animal->nome_animal = $request->nome_animal;
        $animal->caracteristicas_animal = $request->caracteristicas_animal;        
        $animal->id_habitat = $request->id_habitat;
        $animal->id_especie = $request->id_especie;
        $animal->save();
        return redirect()->route('animale.index')->with('message', 'Animal cadastrado com sucesso!');
    }


    public function show($id) 
    {
    	//
    }
    public function editar(Request $request) 
    {
        $id = $request->id;
        $animal = Animal::findOrFail($id);
        return view('alter-animal', compact('animal'));
    }


    public function edit($id) 
    {
        $animal = Animal::findOrFail($id);
        $especies = Especie::all();
        $habitats = Habitat::all();
        return view('alter-animal', compact('animal','especies','habitats'));
    }

    public function update(Request $request, $id) 
    {
        $animal = Animal::findOrFail($id); 
        $animal->nome_animal = $request->nome_animal;
        $animal->caracteristicas_animal = $request->caracteristicas_animal;
        $animal->id_habitat = $request->id_habitat;
        $animal->id_especie = $request->id_especie;  
        $animal->save();
        return redirect()->route('animale.index')->with('message', 'Animal alterado com sucesso!');
    }

    public function destroy($id) 
    {
        $animal = Animal::findOrFail($id);
        $animal->delete();
        return redirect()->route('animale.index')->with('message', 'Animal excluído com sucesso!');
    }
}
