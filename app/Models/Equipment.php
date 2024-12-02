<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;
    protected $table = 'equipments';

    protected $primaryKey = 'equipment_id'; // Definir la clave primaria
    protected $fillable = ['name', 'img_url']; // Campos que se pueden llenar masivamente
    public function exercises()
    {
        return $this->hasMany(Exercise::class, 'equipment_id');
    }
}
