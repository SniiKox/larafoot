<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class championnat extends Model
{
    /**
     * Permet de noter les attributs que l'on souhaite utilisé
     * plutot que de récupéré toute la table
     *
     * @var array
     */
    protected $fillable = [
        'libelle', 'pays',
    ];

    public function equipes()
    {
        return $this->hasMany(Equipe::class);
    }
}
