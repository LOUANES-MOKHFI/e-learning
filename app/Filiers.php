<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filiers extends Model
{
    protected $table = 'filiers';
    protected $fillable = [ 'nom_filier', 'faculte_nom','niveau', 'filier_discription','status', 'created_at', 'updated_at', 'id_faculte' ];

}
