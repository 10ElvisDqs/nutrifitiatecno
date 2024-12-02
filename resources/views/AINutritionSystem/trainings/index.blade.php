

@extends('adminlte::page')
{{-- @extends('layouts.app') --}}

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
@livewireStyles

{{-- @livewire('diet.navar-diet') --}}
{{-- @livewire('diet.meal-card-component') --}}
<main>
    <div class="container my-5">
        {{-- <video width="640" height="360" controls>
            <source src="{{ $item['Exercise Info']['Video Path'] }}" type="video/mp4">
            Your browser does not support the video tag.
        </video> --}}
        <h1 class="text-center mb-4">Informacion del Entrenamiento</h1>
        <div class="accordion" id="trainingAccordion">
            <!-- Loop through the data using Blade syntax -->
            @foreach ($data as $index => $item)
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading{{ $index }}">
                        <button class="accordion-button {{ $loop->first ? '' : 'collapsed' }}"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapse{{ $index }}"
                                aria-expanded="{{ $loop->first ? 'true' : 'false' }}"
                                aria-controls="collapse{{ $index }}">
                            Entrenamiento ID: {{ $item['Training Info']['Training ID'] }} - {{ $item['Training Info']['Name'] }}
                        </button>
                    </h2>
                    <div id="collapse{{ $index }}"
                         class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}"
                         aria-labelledby="heading{{ $index }}"
                         data-bs-parent="#trainingAccordion">
                        <div class="accordion-body">
                            <h5>Entrenamiento Info</h5>
                            <ul>
                                <li><strong>Objetivo:</strong> {{ $item['Training Info']['Goal'] }}</li>
                                <li><strong>Dias:</strong> {{ $item['Training Info']['Days'] }}</li>
                                {{-- <li><strong>Nivel:</strong> {{ $item['Training Info']['Level'] }}</li> --}}
                                <li><strong>Grupo Muscular:</strong> {{ $item['Training Info']['Muscle Groups'] }}</li>
                                <li><strong>Equipo:</strong> {{ $item['Training Info']['Equipment'] }}</li>
                                {{-- <li><strong>Start Date:</strong> {{ $item['Training Info']['Start Date'] }}</li> --}}
                                {{-- <li><strong>End Date:</strong> {{ $item['Training Info']['End Date'] }}</li> --}}
                            </ul>
                            <h5>Rutina Info</h5>
                            <ul>
                                <li><strong>Rutina ID:</strong> {{ $item['Routine Info']['Routine ID'] }}</li>
                                <li><strong>Descripcion:</strong> {{ $item['Routine Info']['Description'] }}</li>
                            </ul>
                            <h5>Ejercicio Info</h5>
                            <ul>
                                <li><strong>Ejercicio ID:</strong> {{ $item['Exercise Info']['Exercise ID'] }}</li>
                                <li><strong>Video:</strong> <a href="{{ $item['Exercise Info']['Video Path'] }}" target="_blank">Watch Video</a></li>
                                <video width="640" height="360" controls>
                                    <source src="{{ $item['Exercise Info']['Video Path'] }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>


                            </ul>
                            <h5>Dia Rutina Info</h5>
                            <ul>
                                <li><strong>Dia Rutina ID:</strong> {{ $item['Routine Day Info']['Routine Day ID'] }}</li>
                                <li><strong>Dia:</strong> {{ $item['Routine Day Info']['Weekday'] }}</li>
                                {{-- <li><strong>Scheduled Date:</strong> {{ $item['Routine Day Info']['Scheduled Date'] }}</li> --}}
                                <li><strong>Sets:</strong> {{ $item['Routine Day Info']['Sets'] }}</li>
                                <li><strong>Repeticiones:</strong> {{ $item['Routine Day Info']['Repetitions'] }}</li>
                                <li><strong>Timpo de descanso:</strong> {{ $item['Routine Day Info']['Rest Time'] }}</li>
                            </ul>
                            {{-- <h5>User Info</h5>
                            <ul>
                                <li><strong>User ID:</strong> {{ $item['User Info']['User ID'] }}</li>
                                <li><strong>Email:</strong> {{ $item['User Info']['Email'] }}</li>
                            </ul> --}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</main>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

@endsection
