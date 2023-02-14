<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cathedra extends Model
{
    use HasFactory;
    protected $table='сathedras';

    public function users(){
        return $this->hasMany(User::class);
    }

    protected $fillable = [
        'department_id',
        'name'
    ];
}
