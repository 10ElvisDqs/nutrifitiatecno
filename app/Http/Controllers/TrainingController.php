<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Training;
use Illuminate\Support\Facades\DB;

class TrainingController extends Controller
{

     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId=auth()->user()->id;
        $sql = "
        SELECT *
        FROM bd_nutrifit_ia_test.trainings,
             bd_nutrifit_ia_test.routines,
             bd_nutrifit_ia_test.exercises,
             bd_nutrifit_ia_test.routine_days,
             bd_nutrifit_ia_test.users
        WHERE
            bd_nutrifit_ia_test.users.id = bd_nutrifit_ia_test.trainings.user_id
            AND bd_nutrifit_ia_test.trainings.id_training = bd_nutrifit_ia_test.routines.id_training
            AND bd_nutrifit_ia_test.routines.routine_id = bd_nutrifit_ia_test.routine_days.routine_id
            AND bd_nutrifit_ia_test.routine_days.exercise_id = bd_nutrifit_ia_test.exercises.exercise_id
            AND bd_nutrifit_ia_test.users.id= :user_id
    ";


    $result= DB::select($sql, ['user_id' => $userId]);
    // $result = DB::select($sql);
    $formattedData = [];

    foreach ($result as $row) {
        $formattedData[] = [
            'Training Info' => [
                'Training ID' => $row->id_training,
                'Name' => $row->name,
                'Goal' => $row->goal,
                'Days' => $row->days,
                'Level' => $row->level,
                'Muscle Groups' => $row->muscles,
                'Equipment' => $row->equipment,
                'Start Date' => $row->start_date,
                'End Date' => $row->end_date,
            ],
            'Routine Info' => [
                'Routine ID' => $row->routine_id,
                'Description' => $row->description,
            ],
            'Exercise Info' => [
                'Exercise ID' => $row->exercise_id,
                'Video Path' => $row->video_path,
            ],
            'Routine Day Info' => [
                'Routine Day ID' => $row->routine_day_id,
                'Weekday' => $row->weekday,
                'Scheduled Date' => $row->scheduled_date,
                'Sets' => $row->sets,
                'Repetitions' => $row->repetitions,
                'Rest Time' => $row->rest_time . " seconds",
            ],
            'User Info' => [
                'User ID' => $row->id,
                'Email' => $row->email,
            ],
        ];
    }

    $data=$formattedData;
    // return response()->json($formattedData, 200, [], JSON_PRETTY_PRINT);
        // dd($result);
        return view('AINutritionSystem.trainings.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $tipoEjercicios = new tipo_ejercicio();
        // $tipoEjercicios->nombre = $request->name;
        // $tipoEjercicios->save();
        // return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // $tipoEjercicio = tipo_ejercicio::find($id);
        // return view('AINutritionSystem.tipoEjercicio.update',compact('tipoEjercicio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        // return redirect()->route('tipoEjercicio.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {


    }
}
