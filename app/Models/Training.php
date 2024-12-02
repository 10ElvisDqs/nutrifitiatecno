<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory;
    protected $table = 'trainings';  // Tabla asociada

    protected $fillable = [
        'name',
        'goal',
        'days',
        'level',
        'muscles',
        'equipment',
        'start_date',
        'end_date',
        'user_id',
        'recommendation_ia_id',
    ];

    // Relación con el modelo User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relación con el modelo RecommendationIA
    public function recommendationIa()
    {
        return $this->belongsTo(IaRecommendation::class);
    }

    public function routines()
    {
        return $this->hasMany(Routine::class, 'id_training');
    }
}
