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

    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [

    ];

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
