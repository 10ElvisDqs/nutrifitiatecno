<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExerciseMuscle extends Model
{
    use HasFactory;
    protected $fillable = ['exercise_id', 'muscle_id']; // Columnas que pueden ser asignadas masivamente


    // Relación con el modelo Exercise
    public function exercise()
    {
        return $this->belongsTo(Exercise::class, 'exercise_id', 'exercise_id');
    }

    // Relación con el modelo Muscle
    public function muscle()
    {
        return $this->belongsTo(Muscle::class, 'muscle_id', 'muscle_id');
    }
}
