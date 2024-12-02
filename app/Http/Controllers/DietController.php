<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\JsonResponse;
use Carbon\Carbon;

use App\Models\Diet; // Asegúrate de esta línea
use App\Models\DayRecipe;
use App\Models\Day;
use App\Models\Recipe;
use App\Models\MealType;
use App\Models\User;


class DietController extends Controller
{


    public function getDietDetails($userId)
{
    // dd($userId);
    // Realizamos la consulta para obtener todas las dietas del usuario, junto con los días y recetas asociadas
    $query = DB::table('diets as d')
        ->join('users as u', 'u.id', '=', 'd.user_id')
        ->join('days as da', 'da.diet_id', '=', 'd.id')
        ->join('day_recipes as dr', 'dr.day_id', '=', 'da.id')
        ->join('recipes as r', 'r.id', '=', 'dr.recipe_id')
        ->join('meal_types as mt', 'mt.id', '=', 'dr.meal_type_id')
        ->where('u.id', '=', $userId)
        ->select('d.id as diet_id', 'd.name as diet_name', 'd.goal', 'd.start_date', 'd.end_date',
            'd.daily_calories', 'd.daily_proteins', 'd.daily_fats', 'd.daily_carbs',
            'da.id as day_id', 'da.name as day_name', 'da.date as day_date',
            'r.id as recipe_id', 'r.name as recipe_name', 'r.ingredients', 'r.preparation',
            'r.benefits', 'r.duration', 'r.image_url', 'r.video_url',
            'mt.name as meal_type', 'dr.completed')
        ->get();

    // Inicializamos un array para almacenar todas las dietas
    $diets = [];

    // Agrupamos los resultados por dieta
    foreach ($query as $row) {
        // Si la dieta no está agregada al array, la agregamos
        if (!isset($diets[$row->diet_id])) {
            $diets[$row->diet_id] = [
                'user_id' => $userId,
                'diet_id' => $row->diet_id,
                'name' => $row->diet_name,
                'goal' => $row->goal,
                'start_date' => $row->start_date,
                'end_date' => $row->end_date,
                'daily_calories' => $row->daily_calories,
                'daily_proteins' => $row->daily_proteins,
                'daily_fats' => $row->daily_fats,
                'daily_carbs' => $row->daily_carbs,
                'days' => []
            ];
        }

        // Agrupamos las recetas por día dentro de cada dieta
        if (!isset($diets[$row->diet_id]['days'][$row->day_id])) {
            $diets[$row->diet_id]['days'][$row->day_id] = [
                'date' => $row->day_date,
                'name' => $row->day_name,
                'recetas' => []
            ];
        }

        // Agregamos la receta al día correspondiente
        $diets[$row->diet_id]['days'][$row->day_id]['recetas'][] = [
            'meal_type' => $row->meal_type,
            'name' => $row->recipe_name,
            'ingredients' => explode(',', $row->ingredients),
            'preparation' => $row->preparation,
            'benefits' => $row->benefits,
            'duration' => $row->duration,
            'image_url' => $row->image_url,
            'video_url' => $row->video_url,
            'completed' => $row->completed
        ];
    }

    // Convertir las dietas en un array, asegurándose de devolver las dietas completas
    return response()->json(['dieta' => array_values($diets)]);
}

    /**
     * Mostrar todas las dietas.
     */
    public function index()
    {



        // Obtener la última dieta creada del usuario autenticado
        $userId=auth()->user()->id;
        $latestDiet = Diet::where('user_id', $userId)
        ->orderBy('created_at', 'desc')
        ->first();
        // dd($latestDiet->id);
        $data = User::where('id', $userId)
        ->whereHas('diets.days', function ($query) use ($latestDiet) {
            $query->where('date', Carbon::today()->toDateString()) // Filtra por fecha de hoy
            ->where('diet_id', $latestDiet->id)
            ->whereHas('dayRecipes', function ($query) {
                $query->whereHas('mealType'); // Asegura que tengan tipos de comida
            });
        })
        ->with([
            'diets.days' => function ($query) {
                $query->where('date', Carbon::today()->toDateString()); // Filtra días de hoy
            },
            'diets.days.dayRecipes.recipe', // Carga las recetas
            'diets.days.dayRecipes.mealType' // Carga los tipos de comida
            ])
            ->get();

            // dd($data);



        return view('AINutritionSystem.diet.index',compact('data'));
    }

    /**
     * Guardar una nueva dieta.
     */
    public function store(Request $request)
    {

    }

    /**
     * Mostrar una dieta específica.
     */
    public function show(Diet $diet)
    {
    }

    /**
     * Actualizar una dieta existente.
     */
    public function update(Request $request, Diet $diet)
    {

    }

    /**
     * Eliminar una dieta.
     */
    public function destroy(Diet $diet)
    {

    }
}
