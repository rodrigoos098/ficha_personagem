<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Personagem extends Model
{
    protected $table = 'personagens';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
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
     * The accessors to append to the model's array form.
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
     * Get the jogo's attribute.
     *
     * @return string
     */
    public function getClasseAttribute() {
        return $this->classeRelationship;
    }

    /**
     * Set the jogo's id.
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
     * Get the jogo's attribute.
     *
     * @return string
     */
    public function getRacaAttribute() {
        return $this->racaRelationship;
    }

    /**
     * Set the jogo's id.
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
     * Get the jogo's attribute.
     *
     * @return string
     */
    public function getAtributoAttribute() {
        return $this->atributoRelationship;
    }

    /**
     * Set the jogo's id.
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
     * Get the jogo's attribute.
     *
     * @return string
     */
    public function getItemUnicoAttribute() {
        return $this->itemUnicoRelationship;
    }

    /**
     * Set the jogo's id.
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
     * Get the jogo's attribute.
     *
     * @return string
     */
    public function getCampanhaAttribute() {
        return $this->campanhaRelationship;
    }

    /**
     * Set the jogo's id.
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
        return $this->belongsTo(Classe::class,'classe_id');
    }

    public function racaRelationship(){
        return $this->belongsTo(Raca::class,'raca_id');
    }

    public function atributoRelationship(){
        return $this->belongsTo(Atributo::class, 'atributo_id');
    }

    public function itemUnicoRelationship(){
        return $this->hasMany(ItemUnico::class, 'personagem_id');
    }

    public function campanhaRelationship(){
        return $this->belongsToMany(Campanha::class, 'personagens_has_campanhas', 'personagem_id', 'campanha_id');
    }
}
