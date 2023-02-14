<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blank extends Model
{
    use HasFactory;
    protected $table='blanks';
    public function user(){
        return $this->belongsTo(User::class);
    }
    protected $fillable = [
        'user_id',
        'punkt1',
        'punkt2',
        'punkt3',
        'punkt4' 
    ];
}
