<?php

namespace App\Models;

use App\Models\avi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class hygiene extends Model
{
    use HasFactory;

    protected $table = 'hygiene';
    protected $primaryKey ='id';
    protected $fillable =[' nom', 'image', 'prix', 'description', 'marque'] ;

    public function Avis(){
        return $this->hasMany(avi::class);
    }
}
