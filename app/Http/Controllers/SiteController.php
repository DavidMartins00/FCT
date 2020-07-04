<?php

namespace App\Http\Controllers;

use App\Anuncio;
use App\Contratos;
use App\Fornecedores;
use App\Intervencao;
use App\nEncomenda;
use App\Operadoras;
use App\PEncomenda;
use App\Produtos;
use App\Reparacoes;
use App\repExt;
use App\Status;
use App\Substituto;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SiteController extends Controller
{
    public function admin()
    {
        return view('site/admin');
    }

    public function ger()
    {
        return view('site/ger');
    }

    public function menu()
    {
        return view('site/menu');
    }

    public function func()
    {
        return view('site/func');
    }

    public function home()
    {
        $ad = Anuncio::where("vis", "LIKE", "1")->get();
        return view('site/index')->with(compact('ad'));
    }


    public function back()
    {
        return view('backoffice/mainpage');
    }

    public function index()
    {
        $id = Auth::id();
        $var = User::findorfail($id);
        return view('site/perfil')->with(compact('var'));
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
            'name' => 'required', 'string', 'max:255',
            'email' => 'required', 'string', 'email', 'max:255', 'unique:user',
            'password' =>'sometimes','string',
            'telefone' => 'sometimes',
            'nif' => 'sometimes',
            'localidade' => 'sometimes',
            'morada' => 'sometimes',
            'codpost' => 'sometimes',
        ]);

        User::where(['id'=>$id])->update([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'password'=>Hash::make($data['password']),
            'telefone' => $data['telefone'],
            'nif' => $data['nif'],
            'localidade' => $data['localidade'],
            'morada' => $data['morada'],
            'codpost' => $data['codpost'],
        ]);

        return Redirect('/')->with('fm_success','Utilizador alterado com sucesso!!');
    }


    public function tables()
    {

        $stat = Status::select()->get();
        $rep = repExt::select()->get();
        $repx = Reparacoes::select()->get();
        $ctr = Contratos::select()->get();
        $for = Fornecedores::select()->get();
        $int = Intervencao::select()->get();
        $nenc = nEncomenda::select()->get();
        $op = Operadoras::select()->get();
        $pen = PEncomenda::select()->get();
        $pro = Produtos::select()->get();
        $sub = Substituto::select()->get();
        $usr = User::select()->get();
        $ad = Anuncio::select()->get();

        return view("backoffice.tables")->with(compact('stat','rep','repx','ctr','for','int','nenc','op','pen','pro','sub','usr','ad'));
    }

    public function publicidade()
    {
        return view('backoffice/anuncios');
    }

    public function repar()
    {
        $rep = Reparacoes::where("idCliente", "LIKE", Auth::id())->get();
        return view('site/repar')->with(compact('rep'));
    }

}
