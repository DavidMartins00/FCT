<?php

namespace App\Http\Controllers;

use App\Fornecedores;
use Illuminate\Http\Request;

class FornecedoresController extends Controller
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
        return view("fornecedores.create");
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
            'nif' => 'required|max:255',
            'morada' => 'required|max:255',
            'cpost' => 'required|max:255',
            'cp' => 'required|max:255',
            'email' => 'required|max:255',
            'telemovel' => 'required|max:255',
            'localidade' => 'required|max:255',
        ]);

        $data = $request->all();
        $var = new Fornecedores();
        $var->nome = $data['nome'];
        $var->nif = $data['nif'];
        $var->morada = $data['morada'];
        $var->cpost = $data['cpost'];
        $var->cp = $data['cp'];
        $var->email = $data['email'];
        $var->telemovel = $data['telemovel'];
        $var->localidade = $data['localidade'];
        $var->save();
        return Redirect('/fornecedores')->with('fm_success','Estado adicionado com sucesso!!');
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
        $var = Fornecedores::findorfail($id);
        return View("fornecedores/edit")->with(compact('var'));
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
            'nif' => 'required|max:255',
            'morada' => 'required|max:255',
            'cpost' => 'required|max:255',
            'cp' => 'required|max:255',
            'email' => 'required|max:255',
            'telemovel' => 'required|max:255',
            'localidade' => 'required|max:255',
        ]);

        Fornecedores::where(['id'=>$id])->update([
            'nome' => $data['nome'],
            'nif' => $data['nif'],
            'morada' => $data['morada'],
            'cpost' => $data['cpost'],
            'cp' => $data['cp'],
            'email' => $data['email'],
            'telemovel' => $data['telemovel'],
            'localidade' => $data['localidade'],
        ]);
        return Redirect('/fornecedores')->with('fm_success','Status alterado com sucesso!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Fornecedores::where(['id'=>$id])->delete();
        return Redirect('/fornecedores')->with('fm_success','Status eliminado com sucesso');
    }
}
