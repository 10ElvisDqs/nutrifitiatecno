<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    use HasFactory;
    protected $table = 'exercises';
    protected $primaryKey = 'exercise_id';
    protected $fillable = [
        'name',
        'description',
        'video_path',
        'equipment_id',
        'exercise_type_id',
    ];

    // Relación con el equipo (Equipment)
    public function equipment()
    {
        return $this->belongsTo(Equipment::class, 'equipment_id');
    }

    // Relación con el tipo de ejercicio (ExerciseType)
    public function exerciseType()
    {
        return $this->belongsTo(ExerciseType::class, 'exercise_type_id');
    }

    public function muscles()
    {
        return $this->hasMany(ExerciseMuscle::class, 'exercise_id');
    }

    // Relación con los días de rutina (routine_days)
    public function routineDays()
    {
        return $this->hasMany(RoutineDay::class, 'exercise_id', 'exercise_id');
    }
}
