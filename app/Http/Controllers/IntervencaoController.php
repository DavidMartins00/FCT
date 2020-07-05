<?php

namespace App\Http\Controllers;

use App\Intervencao;
use Illuminate\Http\Request;

class IntervencaoController extends Controller
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
        return view("intervencao.create");

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
            'interv' => 'required|max:255',
            'idRep' => 'required|max:255',
        ]);

        $data = $request->all();
        $var = new Intervencao();
        $var->interv = $data['interv'];
        $var->idRep = $data['idRep'];
        $var->save();
        return Redirect('/intervencao')->with('fm_success','Estado adicionado com sucesso!!');
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
        $var = Intervencao::findorfail($id);
        return View("intervencao/edit")->with(compact('var'));
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
            'interv' => 'required|max:255',
            'idRep' => 'required|max:255',
        ]);

        Intervencao::where(['id'=>$id])->update([
            'interv' => $data['interv'],
            'idRep' => $data['idRep'],
        ]);
        return Redirect('/intervencao')->with('fm_success','Status alterado com sucesso!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Intervencao::where(['id'=>$id])->delete();
        return Redirect('/intervencao')->with('fm_success','Status eliminado com sucesso');
    }
}
