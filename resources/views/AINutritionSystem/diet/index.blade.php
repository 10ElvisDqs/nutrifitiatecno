
@extends('adminlte::page')
{{-- @extends('layouts.app') --}}

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
@livewireStyles

{{-- @livewire('diet.navar-diet') --}}
{{-- @livewire('diet.meal-card-component') --}}
<main>
    {{-- @livewire('diet.horizontal-calendar'); --}}
        @livewire('diet.nutritional-summary-component',[
                'calories' => $data[0]->diets[0]->daily_calories.' kcal',
                'protein' => $data[0]->diets[0]->daily_proteins.' g',
                'fat' => $data[0]->diets[0]->daily_fats.' g',
                'carbs' => $data[0]->diets[0]->daily_carbs.' g']
            )
    <div class="container ">
            <h1>Dietas del día de hoy ({{ \Carbon\Carbon::today()->toFormattedDateString() }})</h1>

            @foreach ($data as $user)
                <h2>Usuario: {{ $user->name }}</h2>
                <h3>Plan de Dieta: {{ $user->diets[0]->name }}</h3>
                @foreach ($user->diets as $diet)
                    @foreach ($diet->days as $day)
                        {{-- <h4>Día: {{ \Carbon\Carbon::parse($day->date)->format('l, d F Y') }} - {{ $day->name}}</h4> --}}
                        <ul>
                            @foreach ($day->dayRecipes as $dayRecipe)

                                    @php
                                        // Decodifica la cadena JSON en un arreglo
                                        $ingredients = json_decode($dayRecipe->recipe->ingredients, true);
                                    @endphp

                                    {{-- <strong>Comida:</strong> {{ $dayRecipe->mealType->name }} <br>
                                    <strong>Receta:</strong> {{ $dayRecipe->recipe->name }} --}}
                                    @livewire('diet.meal-card-component', [
                                        'title' => $dayRecipe->mealType->name,
                                        'img' => $dayRecipe->mealType->img,
                                        'calories' => $dayRecipe->recipe->calories.' kcal',
                                        'protein' => $dayRecipe->recipe->proteins.' g',
                                        'fat' => $dayRecipe->recipe->fats.' g',
                                        'carbs' => $dayRecipe->recipe->carbs.' g',
                                        'dishName' => $dayRecipe->recipe->name.' g' ,
                                        'ingredients' => $ingredients,
                                        'preparation' => $dayRecipe->recipe->preparation,
                                        'healthBenefits' => $dayRecipe->recipe->benefits,
                                    ])


                            @endforeach
                        </ul>
                    @endforeach
                @endforeach
            @endforeach
    </div>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

@endsection
