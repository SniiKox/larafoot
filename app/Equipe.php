<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'libelle', 'championnat_id',
    ];

    public function championnat()
    {
        return $this->belongsTo(championnat::class);
    }
}
