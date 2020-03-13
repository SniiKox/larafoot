<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    public function championnat()
    {
        return $this->belongsTo(championnat::class);
    }
}
