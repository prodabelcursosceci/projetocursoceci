<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    //

    public function setNomeAttribute($value)
    {
        if($value === 'Beagá') {
            $this->attributes['nome'] = "Belo Horizonte";
        }
    }
}
