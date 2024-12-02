<div class="container mt-5">
    <div class="row">
        <div class="col-7">
            <h3 class="mb-4 text-center text-gradient">Equipos</h3>
            <div class="row">
                @foreach ($equipments as $equipment)
                    <div class="col-md-3 mb-4">
                        <div class="card equipment-card
                            {{ array_key_exists($equipment->equipment_id, $selectedEquipments) ? 'bg-primary text-white' : '' }}"
                            wire:click="toggleEquipment({{ $equipment->equipment_id }})">
                            <div class="glass-bg">
                                <img src="{{ $equipment->img_url }}" class="card-img-top img-fluid rounded-circle" alt="{{ $equipment->name }}">
                                <div class="card-body text-center">
                                    <h6 class="card-title">{{ $equipment->name }}</h6>
                                </div>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>

            <h3 class="mb-4 text-center text-gradient">Músculos</h3>
            <div class="row">
                @foreach ($muscles as $muscle)
                    <div class="col-md-3 mb-4">
                        <div class="card equipment-card
                            {{ array_key_exists($muscle->muscle_id, $selectedMuscles) ? 'bg-primary text-white' : '' }}"
                            wire:click="toggleMuscle({{ $muscle->muscle_id }})">
                            <div class="glass-bg">
                                <img src="{{ $muscle->img_url }}" class="card-img-top img-fluid rounded-circle" alt="{{ $muscle->name }}">
                                <div class="card-body text-center">
                                    <h8 class="card-title">{{ $muscle->name }}</h8>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-5">
            <div>
                <h5 class="text-gradient">Equipos Seleccionados:</h5>
                <ul class="list-group list-group-flush">
                    @foreach ($selectedEquipments as $id => $name)
                        <li class="list-group-item bg-glass">ID: {{ $id }}, Nombre: {{ $name }}</li>
                    @endforeach
                </ul>
            </div>

            <div>
                <h5 class="text-gradient">Músculos Seleccionados:</h5>
                <ul class="list-group list-group-flush">
                    @foreach ($selectedMuscles as $id => $name)
                        <li class="list-group-item bg-glass">ID: {{ $id }}, Nombre: {{ $name }}</li>
                    @endforeach
                </ul>
            </div>


        </div>
    </div>

    <div class="container mt-5">
        <h3 class="mb-4 text-center text-gradient">Selecciona un número</h3>
        <div class="d-flex justify-content-center">
            <div class="btn-group" role="group" aria-label="Radio button group">
                @foreach (range(1, 7) as $i)
                    <input type="radio"
                           class="btn-check"
                           name="number"
                           id="radio{{ $i }}"
                           autocomplete="off"
                           value="{{ $i }}"
                           wire:model.lazy="selectedNumber"> <!-- Asegúrate de usar `.lazy` o `wire:model` -->
                    <label class="btn btn-outline-primary" for="radio{{ $i }}">{{ $i }}</label>
                @endforeach
            </div>
        </div>

        <!-- Mostrar el número seleccionado -->
        @if ($selectedNumber)
            <div class="mt-4 text-center">
                <h5>Has seleccionado el número: <strong>{{ $selectedNumber }}</strong></h5>
            </div>
        @endif
    </div>




    <!-- Botón para enviar datos -->
    {{-- <form action="{{ route('your.route.name') }}" method="POST"> --}}
        {{-- @csrf --}}

        <button type="button" class="btn btn-primary mt-4 w-100" wire:click="enviar">
            Enviar Selección
        </button>

        {{-- </form> --}}
</div>

@script
<script>

            $wire.on('validation-failed', message => {
                alert(message);
            });

            $wire.on('validation-success', message => {
                alert(message);
            });


</script>

@endscript
