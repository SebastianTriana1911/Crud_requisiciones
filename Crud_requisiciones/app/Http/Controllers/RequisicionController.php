<?php

namespace App\Http\Controllers;

use App\Models\Requisicion;
use Illuminate\Http\Request;

class RequisicionController extends Controller{
    public function index(){
        $requi = Requisicion::all();

        return view('requisicion.index', ['requisicion' => $requi]);
    }

    public function create(){
        return view('requisicion.create');
    }

    public function store(Request $request){
        Requisicion::create($request->all());

        return redirect()->route('requisicion.index');
    }

    public function show($id){
        $requi = Requisicion::find($id);

        return view('requisicion.show', ['requisicion' => $requi]);
    }
    
    public function edit($id){
        $requisicion = Requisicion::find($id);

        return view('requisicion.edit', ['requisicion' => $requisicion]);
    }

    public function update(Request $request, $id){
        $requisicion = Requisicion::find($id);
        $requisicion->update($request->all());

        return redirect()->route('requisicion.index');
    }
}
