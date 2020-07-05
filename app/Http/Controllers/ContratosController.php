<?php

namespace App\Http\Controllers;

use App\Contratos;
use Illuminate\Http\Request;

class ContratosController extends Controller
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
        return view("contratos.create");
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
            'op_id' => 'required|max:255',
            'nome' => 'required|max:255',
            'dataativ' => 'required|max:255',
            'nif' => 'required|max:255',
            'agendado' => 'required|max:255',
            'instalado' => 'required|max:255',
            'oknok' => 'required|max:255',
            'tarifario' => 'required|max:255',
            'instaladoPNos' => 'required|max:255',
            'valIva' => 'required|max:255',
            'valsIva' => 'required|max:255',
            'valIvaR' => 'required|max:255',
            'recebido' => 'required|max:255',
            'contEntregue' => 'required|max:255',
            'doc' => 'required|max:255',
        ]);

        $data = $request->all();
        $var = new Contratos();
        $var->op_id = $data['op_id'];
        $var->nome = $data['nome'];
        $var->dataativ = $data['dataativ'];
        $var->nif = $data['nif'];
        $var->agendado = $data['agendado'];
        $var->instalado = $data['instalado'];
        $var->oknok = $data['oknok'];
        $var->tarifario = $data['tarifario'];
        $var->instaladoPNos = $data['instaladoPNos'];
        $var->valIva =  $data['valIva'];
        $var->valsIva = $data['valsIva'];
        $var->valIvaR = $data['valIvaR'];
        $var->recebido = $data['recebido'];
        $var->contEntregue = $data['contEntregue'];
        $var->doc =  $data['doc'];

        $var->save();
        return Redirect('/contrato')->with('fm_success','Estado adicionado com sucesso!!');
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
        $var = Contratos::findorfail($id);
        return View("contratos/edit")->with(compact('var'));
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
        'op_id' => 'required',
        'nome' => 'required',
        'dataativ' => 'required',
        'nif' => 'required',
        'agendado' => 'required',
        'instalado' => 'required',
        'oknok' => 'required',
        'tarifario' => 'required',
        'instaladoPNos' => 'required',
        'valIva' => 'required',
        'valsIva' => 'required',
        'valIvaR' => 'required',
        'recebido' => 'required',
        'contEntregue' => 'required',
        'doc' => 'sometimes',
        ]);

        Contratos::where(['id'=>$id])->update([
            'op_id' => $data['op_id'],
            'nome' => $data['nome'],
            'dataativ' => $data['dataativ'],
            'nif' => $data['nif'],
            'agendado' => $data['agendado'],
            'instalado' => $data['instalado'],
            'oknok' => $data['oknok'],
            'tarifario' => $data['tarifario'],
            'instaladoPNos' => $data['instaladoPNos'],
            'valIva' =>  $data['valIva'],
            'valsIva'  => $data['valsIva'],
            'valIvaR'  => $data['valIvaR'],
            'recebido' => $data['recebido'],
            'contEntregue' => $data['contEntregue'],
            'doc' => $data['doc'],
        ]);

        return Redirect('/contrato')->with('fm_success','Status alterado com sucesso!!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Contratos::where(['id'=>$id])->delete();
        return Redirect('/contrato')->with('fm_success','Status eliminado com sucesso');
    }
}
