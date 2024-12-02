<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExerciseType extends Model
{
    use HasFactory;
    protected $primaryKey = 'exercise_type_id'; // Clave primaria personalizada
    protected $fillable = ['type_name','img_url'];       // Campos permitidos para asignación masiva

    public function exercises()
    {
        return $this->hasMany(Exercise::class, 'exercise_type_id');
    }
}
