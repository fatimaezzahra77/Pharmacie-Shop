<?php

namespace App\Models;

use App\Models\avi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Main extends Model
{

    use HasFactory;
    protected $table = 'medicaments';
    protected $primaryKey = 'idmedicament';
    protected $fillable =[' nom', 'image', 'prix', 'description', 'marque'] ;

    public function Avis(){
        return $this->hasMany(avi::class);
    }
   
}
