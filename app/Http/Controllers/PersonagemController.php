<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personagem;
use App\Models\Classe;
use App\Models\Raca;
use App\Models\ItemUnico;
use App\Models\Campanha;
use App\Models\Atributo;

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
        $this->atributos = new Atributo;
        $this->classes = Classe::all();//->pluck('nome', 'id');
        $this->racas = Raca::all();//->pluck('nome', 'id');
        $this->item_unicos = ItemUnico::all()->pluck('nome', 'id');
        $this->campanhas = Campanha::all();//->pluck('nome', 'id');
        $this->personagens = $personagens;
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
        $personagem = $this->personagens->create([
            'nome' => $request->nome,
            'xp' => $request->xp,
            'idade' => $request->idade,
            'altura' => $request->altura,
            'peso' => $request->peso,
            'classe_id' => $request->classe_id,
            'raca_id' => $request->raca_id,
            'atributo_id' => $this->atributos->create([
                'forca' => $request->forca,
                'destreza' => $request->destreza,
                'constituicao' => $request->constituicao,
                'inteligencia' => $request->inteligencia,
                'sabedoria' => $request->sabedoria,
                'carisma' => $request->carisma,
            ])->id,

        ]);
        $personagem->campanhas = $request->campanhas;

        return redirect()->route('personagens.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)

    {
        $personagem = $this->personagens->find($id);

        $classes = $this->classes;
        $racas = $this->racas;
        //$item_unicos = $this->item_unicos;
        $campanhas = $this->campanhas;
        return view('personagens.form', compact('classes', 'racas', 'campanhas', 'personagem'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $personagem = $this->personagens->find($id);

        $classes = $this->classes;
        $racas = $this->racas;
        //$item_unicos = $this->item_unicos;
        $campanhas = $this->campanhas;
        return view('personagens.form', compact('classes', 'racas', 'campanhas', 'personagem'));
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
        $personagem = $this->personagens->find($id);

        $personagem->update([
            'nome' => $request->nome,
            'xp' => $request->xp,
            'idade' => $request->idade,
            'altura' => $request->altura,
            'peso' => $request->peso,
            'classe_id' => $request->classe_id,
            'raca_id' => $request->raca_id,
            'atributo_id' => tap($this->atributos->find($personagem->atributo->id))->update([
                'forca' => $request->forca,
                'destreza' => $request->destreza,
                'constituicao' => $request->constituicao,
                'inteligencia' => $request->inteligencia,
                'sabedoria' => $request->sabedoria,
                'carisma' => $request->carisma,
            ])->id,

        ]);

        $personagem->campanhas = $request->campanhas;

        return redirect()->route('personagens.show', $personagem->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $personagem = $this->personagens->find($id)->delete();
        return redirect()->route('personagens.index');
    }
}
