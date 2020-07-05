<?php

namespace App\Http\Controllers;

use App\repExt;
use Illuminate\Http\Request;

class repExtController extends Controller
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
        return view("repext.create");

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
            'morada' => 'required|max:255',
            'cdpost' => 'required|max:255',
            'localidade' => 'required|max:255',
            'contrib' => 'required|max:255',
            'contacto' => 'required|max:255',
        ]);

        $data = $request->all();
        $var = new repExt();
        $var->nome = $data['nome'];
        $var->morada = $data['morada'];
        $var->cdpost = $data['cdpost'];
        $var->localidade = $data['localidade'];
        $var->contrib = $data['contrib'];
        $var->contacto = $data['contacto'];
        $var->save();
        return Redirect('/repext')->with('fm_success','Estado adicionado com sucesso!!');
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
        $var = repExt::findorfail($id);
        return View("repext/edit")->with(compact('var'));
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
            'morada' => 'required|max:255',
            'cdpost' => 'required|max:255',
            'localidade' => 'required|max:255',
            'contrib' => 'required|max:255',
            'contacto' => 'required|max:255',
        ]);

        repExt::where(['id'=>$id])->update([
            'nome' => $data['nome'],
            'morada' => $data['morada'],
            'cdpost' => $data['cdpost'],
            'localidade' => $data['localidade'],
            'contrib' => $data['contrib'],
            'contacto' => $data['contacto'],
        ]);
        return Redirect('/repext')->with('fm_success','Status alterado com sucesso!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        repExt::where(['id'=>$id])->delete();
        return Redirect('/repext')->with('fm_success','Status eliminado com sucesso');
    }
}
