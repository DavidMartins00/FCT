<?php

namespace App\Http\Controllers;

use App\Operadoras;
use Illuminate\Http\Request;

class OperadorasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('operadoras.index',[
            'op' => Operadoras::orderBy('id')->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("operadoras.create");
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
            'pais' => 'required|max:255',
        ]);

        $data = $request->all();
        $var = new Operadoras();
        $var->nome = $data['nome'];
        $var->pais = $data['pais'];
        $var->save();
        return Redirect('/operadora')->with('fm_success','Estado adicionado com sucesso!!');
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
        $var = Operadoras::findorfail($id);
        return View("operadoras/edit")->with(compact('var'));
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
            'pais' => 'required|max:255',
        ]);

        Operadoras::where(['id'=>$id])->update([
            'nome' => $data['nome'],
            'pais' => $data['pais'],
        ]);

        return Redirect('/operadora')->with('fm_success','Status alterado com sucesso!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Operadoras::where(['id'=>$id])->delete();
        return Redirect('/operadora')->with('fm_success','Status eliminado com sucesso');
    }
}
