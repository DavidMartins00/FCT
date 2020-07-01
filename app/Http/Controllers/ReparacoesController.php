<?php

namespace App\Http\Controllers;

use App\Clientes;
use App\Reparacoes;
use App\repExt;
use App\Status;
use Illuminate\Http\Request;

class ReparacoesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('reparacoes.index',[
            'rep' => Reparacoes::orderBy('id')->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cli = Clientes::select()->get();
        $stat = Status::select()->get();
        $rep = repExt::select()->get();
        return view("reparacoes.create")->with(compact('cli','stat','rep'));
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
            'idCliente' => 'required|max:255',
            'contacto' => 'required|max:255',
            'marca' => 'required|max:255',
            'modelo' => 'required|max:255',
            'imei' => 'required|max:255',
            'idStatus' => 'required|max:255',
            'data' => 'required|max:255',
            'valor' => 'required|max:255',
            'idRepExt' => 'required|max:255',
        ]);

        $data = $request->all();
        $var = new Reparacoes();
        $var->idCliente = $data['idCliente'];
        $var->contacto = $data['contacto'];
        $var->marca = $data['marca'];
        $var->modelo = $data['modelo'];
        $var->imei = $data['imei'];
        $var->idStatus = $data['idStatus'];
        $var->data = $data['data'];
        $var->valor = $data['valor'];
        $var->idRepExt = $data['idRepExt'];
        $var->save();
        return Redirect('/reparacoes')->with('fm_success','Estado adicionado com sucesso!!');
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
        $rep = Reparacoes::findorfail($id);
        $cli = Clientes::select()->get();
        $stat = Status::select()->get();
        $repx = repExt::select()->get();
        return View("reparacoes/edit")->with(compact('rep','cli','stat','repx'));
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
            'idCliente' => 'required',
            'contacto' => 'required',
            'marca' => 'required',
            'modelo' => 'required',
            'imei' => 'required',
            'idStatus' => 'required',
            'data' => 'required',
            'valor' => 'required',
            'idRepExt' => 'required',
        ]);

        Reparacoes::where(['id'=>$id])->update([
            'idCliente' => $data['idCliente'],
            'contacto' => $data['contacto'],
            'marca' => $data['marca'],
            'modelo' => $data['modelo'],
            'imei' => $data['imei'],
            'idStatus' => $data['idStatus'],
            'data' => $data['data'],
            'valor' => $data['valor'],
            'idRepExt' => $data['idRepExt'],
        ]);
        return Redirect('/reparacoes')->with('fm_success','Status alterado com sucesso!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Reparacoes::where(['id'=>$id])->delete();
        return Redirect('/reparacoes')->with('fm_success','Status eliminado com sucesso');
    }
}
