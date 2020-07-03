<?php

namespace App\Http\Controllers;

use App\Anuncio;
use Illuminate\Http\Request;

class AnuncioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("anuncios.create");
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
            'nome' => 'required',
            'preco' => 'required',
            'desc' => 'required',
            'vis' => 'required',
            'img' => 'sometimes',

        ]);

        $data = $request->all();
        $var = new Anuncio();
        $var->nome = $data['nome'];
        $var->preco = $data['preco'];
        $var->desc = $data['desc'];
        $var->vis = $data['vis'];
        $var->img = $data['img'];

        $var->save();
        return Redirect('/tables')->with('fm_success','Estado adicionado com sucesso!!');
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
        $var = Anuncio::findorfail($id);
        return View("anuncios/edit")->with(compact('var'));
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
            'nome' => 'required',
            'preco' => 'required',
            'desc' => 'required',
            'vis' => 'required',
            'img' => 'sometimes',
        ]);

        Anuncio::where(['id'=>$id])->update([
            'nome' => $data['nome'],
            'preco' => $data['preco'],
            'desc' => $data['desc'],
            'vis' => $data['vis'],
            'vis' => $data['vis'],
        ]);

        return Redirect('/tables')->with('fm_success','Status alterado com sucesso!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Anuncio::where(['id'=>$id])->delete();
        return Redirect('/tables')->with('fm_success','Status eliminado com sucesso');
    }
}
