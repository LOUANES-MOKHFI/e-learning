<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $table = 'module';
    protected $fillable = [ 'nom_module', 'filier', 'num_semstr', 'coeff', 'id'];
}
