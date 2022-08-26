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
     * Declarações privadas globais.
     */

    /**
     * Método construtor, para instanciar um objeto da classe controller.
     *
     * @return void
     */
    public function __construct(Personagem $personagens){
        $this->atributos = new Atributo;
        $this->classes = Classe::all()->pluck('nome', 'id');
        $this->racas = Raca::all()->pluck('nome', 'id');
        $this->item_unicos = ItemUnico::all()->pluck('nome', 'id');
        $this->campanhas = Campanha::all()->pluck('nome', 'id');
        $this->personagens = $personagens;
    }

    /**
     * Função para listar todos os personagens.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personagens = $this->personagens->all();
        return view('personagens.index', compact('personagens'));
    }

    /**
     * Mostrar um formulário para criar um novo personagem.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tela = 'create';

        $classes = $this->classes;
        $racas = $this->racas;
        //$item_unicos = $this->item_unicos;
        $campanhas = $this->campanhas;
        return view('personagens.form', compact('classes', 'racas', 'campanhas', 'tela'));
    }

    /**
     * Pega os dados do formulário da função create, e armazena no banco de dados.
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

        $campanhas = $request->campanha;

        if(isset($campanhas)){

            foreach($campanhas as $campanha){
                $campanha_id = Campanha::where('nome', $campanha)->first()->id;
                $personagem->campanhaRelationship()->attach($campanha_id);
            }

        }

        return redirect()->route('personagens.index');
    }

    /**
     * Mostrar os dados de um personagem específico.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)

    {
        $tela = 'show';
        $form = 'disabled';

        $personagem = $this->personagens->find($id);

        $classes = $this->classes;
        $racas = $this->racas;
        //$item_unicos = $this->item_unicos;
        $campanhas = $this->campanhas;
        return view('personagens.form', compact('classes', 'racas', 'campanhas', 'personagem', 'form', 'tela'));
    }

    /**
     * Mostrar um formulário para editar os dados de um personagem específico.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tela = 'edit';

        $personagem = $this->personagens->find($id);

        $classes = $this->classes;
        $racas = $this->racas;
        //$item_unicos = $this->item_unicos;
        $campanhas = $this->campanhas;
        return view('personagens.form', compact('classes', 'racas', 'campanhas', 'personagem', 'tela'));
    }

    /**
     * Pega os dados do formulário da função edit, e armazena no banco de dados.
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

        $campanhas = $request->campanha;

        $personagem->campanhaRelationship()->sync(null);

        if(isset($campanhas)){

            foreach($campanhas as $campanha){
                $campanha_id = Campanha::where('nome', $campanha)->first()->id;
                $personagem->campanhaRelationship()->attach($campanha_id);
            }

        }

        return redirect()->route('personagens.show', $personagem->id);
    }

    /**
     * Deleta um personagem do banco de dados.
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
