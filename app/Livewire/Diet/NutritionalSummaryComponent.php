<?php

namespace App\Livewire\Diet;

use Livewire\Component;

class NutritionalSummaryComponent extends Component
{

    public $calories;
    public $protein;
    public $fat;
    public $carbs;

    public function render()
    {
        return view('livewire.diet.nutritional-summary-component');
    }
}
