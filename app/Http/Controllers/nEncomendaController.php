<?php

namespace App\Http\Controllers;

use App\Clientes;
use App\nEncomenda;
use App\User;
use Illuminate\Http\Request;

class nEncomendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('nencomenda.index',[
            'nen' => nEncomenda::orderBy('id')->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cli = User::select()->get();
        return view("nencomenda.create")->with(compact('cli'));
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
            'data' => 'required|max:255',
            'idCliente' => 'required|max:255',
        ]);

        $data = $request->all();
        $var = new nEncomenda();
        $var->data = $data['data'];
        $var->idCliente = $data['idCliente'];
        $var->save();
        return Redirect('/nencomenda')->with('fm_success','Estado adicionado com sucesso!!');
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
        $var = nEncomenda::findorfail($id);
        $cli = User::select()->get();
        return View("nencomenda/edit")->with(compact('var','cli'));
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
            'data' => 'required|max:255',
            'idCliente' => 'required|max:255',
        ]);

        nEncomenda::where(['id'=>$id])->update([
            'data' => $data['data'],
            'idCliente' => $data['idCliente'],
        ]);
        return Redirect('/nencomenda')->with('fm_success','Status alterado com sucesso!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        nEncomenda::where(['id'=>$id])->delete();
        return Redirect('/nencomenda')->with('fm_success','Status eliminado com sucesso');
    }
}
