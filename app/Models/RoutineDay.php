<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoutineDay extends Model
{
    use HasFactory;
    protected $primaryKey = 'routine_day_id';
    protected $fillable = [
            'routine_id',
            'weekday',
            'exercise_id',
            'scheduled_date',
            'sets',
            'repetitions',
            'rest_time'
    ];

    // Relación con el modelo Routine
    public function routine()
    {
        return $this->belongsTo(Routine::class, 'routine_id', 'routine_id');
    }

    // Relación con el modelo Exercise
    public function exercise()
    {
        return $this->belongsTo(Exercise::class, 'exercise_id', 'exercise_id');
    }

    public function progressHistories()
    {
        return $this->hasMany(ProgressHistory::class, 'routine_day_id');
    }
}
