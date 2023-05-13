<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hygiene extends Model
{
    protected $table = 'hygiene';
    protected $fillable =['nom', 'image', 'prix', 'description', 'marque'] ;
    use HasFactory;
}
