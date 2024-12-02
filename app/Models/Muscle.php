<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Muscle extends Model
{
    use HasFactory;

    protected $primaryKey = 'muscle_id'; // Clave primaria personalizada
    protected $fillable = ['name', 'img_url']; // Campos que se pueden llenar masivamente
    //pertenece a muchos
    // public function ejercicios(){
    //     return $this->belongsToMany(Ejercicio::class,'EjercicoMusculo');
    // }

    // Relación con la tabla intermedia 'patient_condition'
    public function exerciseMuscles()
    {
        return $this->hasMany(ExerciseMuscle::class, 'muscle_id');
    }
}
