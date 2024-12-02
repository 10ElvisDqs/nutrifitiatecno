<div class="card bg-dark text-light">
    <div class="card-body">
        <h5 class="card-title">Día 3</h5>
        <p class="card-text">Pecho-Brazos Rutina</p>

        <div class="row text-center">
            @foreach ($musculos as $musculo)
                <div class="col">
                    <img src="{{ $musculo['imagen'] }}" alt="{{ $musculo['nombre'] }}" class="img-fluid" style="max-width: 50px;">
                    <p>{{ $musculo['nombre'] }}</p>
                </div>
            @endforeach
        </div>

        <div class="row mt-3">
            @foreach ($ejercicios as $ejercicio)
                <div class="col">
                    <img src="{{ $ejercicio['imagen'] }}" alt="{{ $ejercicio['nombre'] }}" class="img-fluid rounded" style="max-width: 80px;">
                </div>
            @endforeach
        </div>
    </div>
</div>
