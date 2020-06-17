<?php

namespace App\Http\Controllers;

use App\Substituto;
use Illuminate\Http\Request;

class SubstitutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('substituto.index',[
            'sub' => Substituto::orderBy('id')->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("substituto.create");
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
            'marca' => 'required|max:255',
            'modelo' => 'required|max:255',
            'imei' => 'required|max:255',
        ]);

        $data = $request->all();
        $var = new Substituto();
        $var->marca = $data['marca'];
        $var->modelo = $data['modelo'];
        $var->imei = $data['imei'];
        $var->save();
        return Redirect('/substituto')->with('fm_success','Estado adicionado com sucesso!!');
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
        $var = Substituto::findorfail($id);
        return View("substituto/edit")->with(compact('var'));
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
            'marca' => 'required|max:255',
            'modelo' => 'required|max:255',
            'imei' => 'required|max:255',
        ]);

        Substituto::where(['id'=>$id])->update([
            'marca' => $data['marca'],
            'modelo' => $data['modelo'],
            'imei' => $data['imei'],
        ]);

        return Redirect('/substituto')->with('fm_success','Status alterado com sucesso!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Substituto::where(['id'=>$id])->delete();
        return Redirect('/substituto')->with('fm_success','Status eliminado com sucesso');
    }
}
