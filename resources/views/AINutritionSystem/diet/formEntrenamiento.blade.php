@extends('layouts.app')
<style>
    .equipment-card {
        cursor: pointer;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .equipment-card:hover {
        background-color: rgba(0, 123, 255, 0.5); /* Azul transparente */
        color: white;
    }
</style>

{{-- @livewireStyles --}}
@livewire('formEntrenamiento',[
'tipo' =>$data['tipo'],
'user_id' =>$data['user_id'],
'recommendation_ia_id' =>$data['recommendation_ia_id'],
'age' => $data['age'],
'gender' => $data['gender'],
'weight' => $data['weight'],
'height' => $data['height'],
'bmi' => $data['bmi'],
'dietary_preference' => $data['dietary_preference'],
'physical_activity_level' => $data['physical_activity_level'],
'diseases' => $data['diseases'],
'allergies' => $data['allergies'],
'physical_conditions' => $data['physical_conditions'],
'target_type' => $data['target_type'],
]);
// {{-- @livewireScripts


