<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculte extends Model
{
    protected $table = 'faculte';
    protected $fillable = ['nom_faculte', 'universite_faculte', 'created_at', 'updated_at', 'id_universite'];
}
