<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tds extends Model
{
    protected $table = 'tds';
    protected $fillable = ['domaine','serie', 'correction', 'id_module', 'created_at', 'updated_at'];
}
