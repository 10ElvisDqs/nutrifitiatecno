<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Routine extends Model
{
    use HasFactory;

    protected $table = 'routines'; // Nombre de la tabla
    protected $fillable = [
        'name',
        'description',
        'id_training',
    ];

    // Relación con la tabla 'trainings'
    public function training()
    {
        return $this->belongsTo(Training::class, 'id_training');
    }

    public function routineDays()
    {
        return $this->hasMany(RoutineDay::class, 'routine_id', 'routine_id');
    }
}
