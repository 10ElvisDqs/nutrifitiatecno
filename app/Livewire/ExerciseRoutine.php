<?php

namespace App\Livewire;

use Livewire\Component;

class ExerciseRoutine extends Component
{
    public $musculos = [
        ['nombre' => 'Abdominales', 'imagen' => 'https://s2.abcstatics.com/media/bienestar/2021/02/28/entrenar-pareja-kiEH--1248x698@abc.jpg'],
        ['nombre' => 'Hombro', 'imagen' => 'https://s2.abcstatics.com/media/bienestar/2021/02/28/entrenar-pareja-kiEH--1248x698@abc.jpg'],
        ['nombre' => 'Bíceps', 'imagen' => 'https://s2.abcstatics.com/media/bienestar/2021/02/28/entrenar-pareja-kiEH--1248x698@abc.jpg'],
        ['nombre' => 'Glúteos', 'imagen' => 'https://s2.abcstatics.com/media/bienestar/2021/02/28/entrenar-pareja-kiEH--1248x698@abc.jpg'],
        ['nombre' => 'Pecho', 'imagen' => 'https://s2.abcstatics.com/media/bienestar/2021/02/28/entrenar-pareja-kiEH--1248x698@abc.jpg'],
    ];

    public $ejercicios = [
        ['nombre' => 'Flexiones', 'imagen' => 'https://s2.abcstatics.com/media/bienestar/2021/02/28/entrenar-pareja-kiEH--1248x698@abc.jpg'],
        ['nombre' => 'Plancha', 'imagen' => 'https://s2.abcstatics.com/media/bienestar/2021/02/28/entrenar-pareja-kiEH--1248x698@abc.jpg'],
        ['nombre' => 'Sentadilla', 'imagen' => 'https://s2.abcstatics.com/media/bienestar/2021/02/28/entrenar-pareja-kiEH--1248x698@abc.jpg'],
        ['nombre' => 'Escaladores', 'imagen' => 'https://s2.abcstatics.com/media/bienestar/2021/02/28/entrenar-pareja-kiEH--1248x698@abc.jpg'],
        ['nombre' => 'Dominadas', 'imagen' => 'https://s2.abcstatics.com/media/bienestar/2021/02/28/entrenar-pareja-kiEH--1248x698@abc.jpg'],
    ];
    public function render()
    {
        return view('livewire.exercise-routine');
    }
}
