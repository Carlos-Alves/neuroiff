<?php

namespace Neuroiff;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $fillable = [
        'name',
        'prontuario',
    ];
}
