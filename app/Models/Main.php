<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Main extends Model
{
    protected $primaryKey = 'idmedicament';
    protected $table = 'medicaments';
    use HasFactory;
}
