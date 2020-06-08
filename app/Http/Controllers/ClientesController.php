<?php

namespace App\Http\Controllers;

use App\Clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('clientes.index',[
            'cli' => Clientes::orderBy('id')->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("clientes.create");
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
            'telefone' => 'required|max:255',
            'nif' => 'required|max:255',
            'localidade' => 'required|max:255',
            'morada' => 'required|max:255',
            'codpost' => 'required|max:255',
            'user_id' => 'required|max:255',

        ]);

        $data = $request->all();
        $var = new Clientes();
        $var->nome = $data['nome'];
        $var->telefone = $data['telefone'];
        $var->nif = $data['nif'];
        $var->localidade = $data['localidade'];
        $var->morada = $data['morada'];
        $var->codpost = $data['codpost'];
        $var->user_id = $data['user_id'];


        $var->save();
        return Redirect('/cliente')->with('fm_success','Estado adicionado com sucesso!!');
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
        $var = Clientes::findorfail($id);
        return View("clientes/edit")->with(compact('var'));
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
            'telefone' => 'required|max:255',
            'nif' => 'required|max:255',
            'localidade' => 'required|max:255',
            'morada' => 'required|max:255',
            'codpost' => 'required|max:255',
            'user_id' => 'required|max:255',
        ]);

        Clientes::where(['id'=>$id])->update([
            'nome' => $data['nome'],
            'telefone' => $data['telefone'],
            'nif' => $data['nif'],
            'localidade' => $data['localidade'],
            'morada' => $data['morada'],
            'codpost' => $data['codpost'],
            'user_id' => $data['user_id'],
        ]);

        return Redirect('/cliente')->with('fm_success','Status alterado com sucesso!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Clientes::where(['id'=>$id])->delete();
        return Redirect('/cliente')->with('fm_success','Status eliminado com sucesso');
    }
}
