<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'possession', 'BP', 'BC', 'nb_changement', 'nb_passe', 'nb_tir', 'nb_tir_cadres', 'cleansheet',
    ];
}
