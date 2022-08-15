<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personagem;
use App\Models\Classe;
use App\Models\Raca;
use App\Models\ItemUnico;
use App\Models\Campanha;

class PersonagemController extends Controller
{
 /**
     * Global private declarations.
     */

    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct(Personagem $personagens){
        $this->classes = Classe::all()->pluck('nome', 'id');
        $this->racas = Raca::all()->pluck('nome', 'id');
        $this->item_unicos = ItemUnico::all()->pluck('nome', 'id');
        $this->campanhas = Campanha::all()->pluck('nome', 'id');
        $this->personagens = $personagens;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function test()
    {
        $personagens = $this->personagens->all();
        return view('personagens', compact('personagens'));
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personagens = $this->personagens->all();
        return view('personagens.index', compact('personagens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classes = $this->classes;
        $racas = $this->racas;
        //$item_unicos = $this->item_unicos;
        $campanhas = $this->campanhas;
        return view('personagens.form', compact('classes', 'racas', 'campanhas'));


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
