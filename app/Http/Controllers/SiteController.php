<?php

namespace App\Http\Controllers;

use App\Anuncio;
use App\Clientes;
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

    public function index()
    {
        $ad = Anuncio::where("vis", "LIKE", "1")->get();
        return view('site/index')->with(compact('ad'));
    }


    public function back()
    {
        return view('backoffice/mainpage');
    }

    public function profile()
    {
        return view('backoffice/userprofile');
    }

    public function tables()
    {

        $cli = Clientes::select()->get();
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

        return view("backoffice.tables")->with(compact('cli','stat','rep','repx','ctr','for','int','nenc','op','pen','pro','sub','usr','ad'));
    }

    public function publicidade()
    {
        return view('backoffice/anuncios');
    }
}
