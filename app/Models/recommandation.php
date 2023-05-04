<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recommandation extends Model
{
    protected $primaryKey = 'idrecommandation';
    protected $table = 'recommandations';
    use HasFactory;
}
