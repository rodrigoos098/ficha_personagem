<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Personagem extends Model
{
    protected $table = 'personagens';

    /**
     * Atributos protegidos, que não podem ser atribuídos em massa    =)
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Atributos escondidos, que não serão necessários que apareçam    =)
     *
     * @var array
     */
    protected $hidden = [
        'classeRelationship',
        'racaRelationship',
        'atributoRelationship',
        'itemUnicoRelationship',
        'campanhaRelationship',
        'created_at',
        'updated_at'
    ];

    /**
     * Relacionamentos que serão usados pela model    =)
     *
     * @var array
     */
    protected $appends = [
        'classe',
        'raca',
        'atributo',
        'itemUnico',
        'campanha',
    ];

/************************************************************************************************/

    /**
     * Retorna o atributo classe em formato de string.    =)
     *
     * @return string
     */
    public function getClasseAttribute() {
        return $this->classeRelationship;
    }

    /**
     * Define o id da classe através de um int.    =)
     *
     * @param  int  $value
     * @return void
     */
    public function setClasseAttribute($value)
    {
        if(isset($value)){
            $this->attributes['classe_id'] = Classe::where('id', $value)->first()->id;
        }
    }

        /**
     * Retorna o atributo raça em formato de string.    =)
     *
     * @return string
     */
    public function getRacaAttribute() {
        return $this->racaRelationship;
    }

    /**
     * Define o id da raça através de um int.    =)
     *
     * @param  int  $value
     * @return void
     */
    public function setRacaAttribute($value)
    {
        if(isset($value)){
            $this->attributes['raca_id'] = Raca::where('id', $value)->first()->id;
        }
    }

        /**
     * Retorna o atributo 'atributo' em formato de string.    =)
     *
     * @return string
     */
    public function getAtributoAttribute() {
        return $this->atributoRelationship;
    }

    /**
     * Define o id de atributo através de um int.    =)
     *
     * @param  int  $value
     * @return void
     */
    public function setAtributoAttribute($value)
    {
        if(isset($value)){
            $this->attributes['atributo_id'] = Atributo::where('id', $value)->first()->id;
        }
    }

        /**
     * Retorna o atributo itemUnico em formato de string.    =)
     *
     * @return string
     */
    public function getItemUnicoAttribute() {
        return $this->itemUnicoRelationship;
    }

    /**
     * Define o um de itemUnico através de um int.    =)
     *
     * @param  int  $value
     * @return void
     */
    public function setItemUnicoAttribute($value)
    {
        if(isset($value)){
            $this->attributes['personagem_id'] = ItemUnico::where('id', $value)->first()->id;
        }
    }

        /**
     * Retorna o atributo campanha em formato de string.    =)
     *
     * @return string
     */
    public function getCampanhaAttribute() {
        return $this->campanhaRelationship;
    }

    /**
     * Define um id de campanha através de um int.    =)
     *
     * @param  int  $value
     * @return void
     */
    public function setCampanhaAttribute($value)
    {
        $this->campanhaRelationship()->sync($value);
    }

/************************************************************************************************/

    public function classeRelationship(){
        return $this->belongsTo(Classe::class,'classe_id'); // Relacionamento 1 pra 1
    }

    public function racaRelationship(){
        return $this->belongsTo(Raca::class,'raca_id'); // Relacionamento 1 pra 1
    }

    public function atributoRelationship(){
        return $this->belongsTo(Atributo::class, 'atributo_id'); // Relacionamento 1 pra 1
    }

    public function itemUnicoRelationship(){
        return $this->hasMany(ItemUnico::class, 'personagem_id'); // Relacionamento 1 pra muitos
    }

    public function campanhaRelationship(){
        return $this->belongsToMany(Campanha::class, 'personagens_has_campanhas', 'personagem_id', 'campanha_id'); // Relacionamento muitos pra muitos
    }
}
