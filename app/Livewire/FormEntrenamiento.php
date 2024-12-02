<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\Equipment;
use App\Models\Muscle;
use Illuminate\Support\Facades\Auth;


class FormEntrenamiento extends Component
{
    public $equipments = [];
    public $muscles = [];
    public $selectedEquipments = [];
    public $selectedMuscles = [];
    public $selectedNumber=1; // Aquí se guardará el número seleccionado

    //data public $nombre;
    public $age;
    public $gender;
    public $weight;
    public $height;
    public $bmi;
    public $dietary_preference;
    public $physical_activity_level;
    public $diseases;
    public $allergies;
    public $physical_conditions;
    public $target_type;
    public $recommendation_ia_id;
    public $user_id;

    public $tipo;

    public function mount($tipo,$user_id,$recommendation_ia_id, $age, $gender, $weight, $height, $bmi, $dietary_preference, $physical_activity_level, $diseases, $allergies, $physical_conditions, $target_type)
    {
        $this->muscles = Muscle::all();
        $this->equipments = Equipment::all();
        $this->selectedEquipments ;
        $this->selectedMuscles ;

        //data
        $this->user_id = $user_id;
        $this->recommendation_ia_id=$recommendation_ia_id;
        $this->age = $age;
        $this->gender = $gender;
        $this->weight = $weight;
        $this->height = $height;
        $this->bmi = $bmi;
        $this->dietary_preference = $dietary_preference;
        $this->physical_activity_level = $physical_activity_level;
        $this->diseases = $diseases;
        $this->allergies = $allergies;
        $this->physical_conditions = $physical_conditions;
        $this->target_type = $target_type;
        // Simula un incremento del progreso cada segundo
        $this->tipo=$tipo;
    }

    public function toggleEquipment($equipmentId)
{
    $equipment = $this->equipments->firstWhere('equipment_id', $equipmentId);

    if (!$equipment) {
        return; // Si no se encuentra el equipo, salimos del método
    }

    if (array_key_exists($equipmentId, $this->selectedEquipments)) {
        unset($this->selectedEquipments[$equipmentId]); // Eliminar equipo seleccionado
    } else {
        $this->selectedEquipments[$equipmentId] = $equipment->name; // Agregar equipo seleccionado
    }
}

public function toggleMuscle($muscleId)
{
    $muscle = $this->muscles->firstWhere('muscle_id', $muscleId);

    if (!$muscle) {
        return; // Si no se encuentra el músculo, salimos del método
    }

    if (array_key_exists($muscleId, $this->selectedMuscles) ) {
        unset($this->selectedMuscles[$muscleId]); // Eliminar músculo seleccionado
    } else {
        $this->selectedMuscles[$muscleId] = $muscle->name; // Agregar músculo seleccionado
    }
}




    public function enviar(){
        $this->validateSelection();
        $selectedEquipmentNamesString = implode(', ', $this->selectedEquipments);
        $selectedMuscleNamesString = implode(', ', $this->selectedMuscles);
        $userId= Auth::id();

            $data = [
                'tipo' => 'entrenamiento',
                'user_id' => $userId,
                'recommendation_ia_id'=> $this->recommendation_ia_id,
                'age' => $this->age,
                'gender' => $this->gender,
                'weight' => $this->weight,
                'height' => $this->height,
                'bmi' => $this->bmi,
                'dietary_preference' => $this->dietary_preference,
                'physical_activity_level' => $this->physical_activity_level,
                'diseases' => empty($this->diseases) ? 'Ninguno' : $this->diseases,
                'allergies' => empty($this->allergies) ? 'Ninguno' : $this->allergies,
                'physical_conditions' => empty($this->physical_conditions) ? 'Ninguno' : $this->physical_conditions,
                'target_type' => $this->target_type,
                'days'=>$this->selectedNumber,
                'equipment_names' => $selectedEquipmentNamesString ,  // Los nombres de los equipos seleccionados
                'muscle_names' => $selectedMuscleNamesString,      // Los nombres de los músculos seleccionados
            ];
            // dd($data);
        return redirect()->route('generarPlan', $data);
        // return redirect()->route('generarPlan',$data);
    }

    public function validateSelection()
    {
        // dd($this->selectedEquipments);
        if (empty($this->selectedEquipments) || empty($this->selectedMuscles)) {
            $message='Debes seleccionar al menos un equipo y un músculo.';
            $this->dispatch('validation-failed',$message );
        }
    }


    public function render()
    {
        return view('livewire.form-entrenamiento');
    }
}
