<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class avi extends Model
{
    use HasFactory;

    protected $table = 'avies';
    protected $primaryKey = 'idavis';
    protected $fillable = ['iduser', 'name', 'email', 'avis', 'image', 'rate'];

    public function user(){
        return $this->belongsTo(User::class, 'iduser');
    } 
   
}
