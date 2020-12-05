<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cours extends Model
{
    protected $table = 'cours';
    protected $fillable = ['domaine','cours', 'id_module', 'created_at', 'updated_at'];
}
