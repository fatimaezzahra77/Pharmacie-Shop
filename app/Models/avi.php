<?php

namespace App\Models;

use App\Models\User;
use App\Models\hygiene;
use App\Models\medicament;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class avi extends Model
{
    use HasFactory;

    protected $table = 'avies';
    protected $primaryKey = 'idavis';
    protected $fillable = ['iduser', 'id', 'name', 'email', 'avis', 'image', 'rate'];

    public function user(){
        return $this->belongsTo(User::class, 'iduser');
    } 
    public function hygiene(){
        return $this->belongsTo(hygiene::class, 'id');
    }
    public function medicament(){
        return $this->belongsTo(medicament::class, 'idmedicament');
    }
   
}
