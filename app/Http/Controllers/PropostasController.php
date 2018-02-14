<?php

namespace App\Http\Controllers;

use App\Proposta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PropostasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cadastrar()
    {
        if(Auth::check())
            return view('propostas.proposta');
        else
            return view('auth.login');

    }

    public  function listaPropostaCompleta($id){
//        $id=$request->id;

        if(Auth::check() && Auth::user()->isAdmin){
            $proposta=Proposta::where('id','=',$id)->get();

//            dd($proposta);

            return view('propostas.verproposta')->with('proposta',$proposta);}
        else {
            return view('auth.login');
        }
    }
    public function index(){

        if(Auth::check() && Auth::user()->isAdmin){
            $propostas=Proposta::all()->sortBy('created_at')->sortBy("proposta_aprovada");

//            dd($propostas);

            return view('propostas.listarTodas')->with('propostas',$propostas);}
        else {
            return view('auth.login');
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function verificaStatusProposta(){
        if(Auth::check()){
            $proposta=Proposta::where('user_id','=',Auth::id())->get()->first();

            if($proposta->proposta_aprovada){
                $aprovada=true;

            }else{
                $aprovada=false;
            }

            return view('propostas.verficaStatusProposta')->with('proposta_aprovada',$aprovada);}
        else {
            return view('auth.login');
        }

    }

        public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $proposta= new Proposta;
        $proposta->nomealuno=$request->nomealuno;
        $proposta->matricula=$request->matricula;
        $proposta->orientador=$request->orientador;
        $proposta->coorientador=$request->coorientador;

        $proposta->tipotcc=$request->tipotcc;
        $proposta->titulo=$request->titulo;
        $proposta->areapesquisa=$request->areapesquisa;
        $proposta->tema=$request->tema;
        $proposta->problema=$request->problema;
        $proposta->referencias=$request->referencias;
        $proposta->objetivos=$request->objetivos;
        $proposta->user_id=Auth::id();
        $proposta->save();
        return "Cadastro Efetuado";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Proposta  $proposta
     * @return \Illuminate\Http\Response
     */
    public function show(Proposta $proposta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Proposta  $proposta
     * @return \Illuminate\Http\Response
     */
    public function edit(Proposta $proposta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Proposta  $proposta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proposta $proposta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Proposta  $proposta
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Auth::check() && Auth::user()->isAdmin){
        $proposta=Proposta::find($id);
//        dd($proposta);
        $proposta->delete();
        return $this->index();
        }
    }

    public function aprovarPropostas(){
        if(Auth::check() && Auth::user()->isAdmin){
            $propostas=Proposta::where('proposta_aprovada','=','0')->get()->sortBy('created_at');

//            dd($propostas);

            return view('propostas.aprovar')->with('propostas',$propostas);}
        else {
            return view('auth.login');
        }
    }

    public function aprovarProposta($id){
//        dd($id);
        if(Auth::check() && Auth::user()->isAdmin){
            $proposta=Proposta::find($id);
            $proposta->proposta_aprovada=1;
            $proposta->save();
//            dd($proposta);
        return $this->aprovarPropostas();
        }

    }
}
