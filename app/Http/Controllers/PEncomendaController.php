<?php

namespace App\Http\Controllers;

use App\PEncomenda;
use Illuminate\Http\Request;

class PEncomendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Redirect('/tables');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("pencomenda.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|max:255',
            'qtd' => 'required|max:255',
            'idNota' => 'required|max:255',
            'idProd' => 'required|max:255',
        ]);

        $data = $request->all();
        $var = new PEncomenda();
        $var->nome = $data['nome'];
        $var->qtd = $data['qtd'];
        $var->idNota = $data['idNota'];
        $var->idProd = $data['idProd'];
        $var->save();
        return Redirect('/pencomenda')->with('fm_success','Estado adicionado com sucesso!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $var = PEncomenda::findorfail($id);
        return View("pencomenda/edit")->with(compact('var'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $request->validate([
            'nome' => 'required|max:255',
            'qtd' => 'required|max:255',
            'idNota' => 'required|max:255',
            'idProd' => 'required|max:255',
        ]);

        PEncomenda::where(['id'=>$id])->update([
            'nome' => $data['nome'],
            'qtd' => $data['qtd'],
            'idNota' => $data['idNota'],
            'idProd' => $data['idProd'],
        ]);
        return Redirect('/pencomenda')->with('fm_success','Status alterado com sucesso!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PEncomenda::where(['id'=>$id])->delete();
        return Redirect('/pencomenda')->with('fm_success','Status eliminado com sucesso');
    }
}
