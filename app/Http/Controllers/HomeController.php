<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chamado;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        $chamados = Chamado::where('user_id','=',$user->id)->get();
        return view('home', compact('chamados'));
    }

    public function detalhe($id)
    {
        $chamado = Chamado::find($id);
        return view('detalhe', compact('chamado'));
    }
}
