<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgressHistory extends Model
{
    use HasFactory;
    // Nombre de la tabla
    protected $table = 'progress_histories';

    // Clave primaria personalizada
    protected $primaryKey = 'history_id';

    // Relación con el usuario
    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }

    // Relación con el día de rutina
    public function routineDay()
    {
        return $this->belongsTo(RoutineDay::class, 'routine_day_id');
    }
}
