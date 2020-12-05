<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Examens extends Model
{
    protected $table = 'examens';
    protected $fillable = ['domaine','examen', 'correction', 'annee_examen', 'id_module', 'created_at', 'updated_at'];
}
