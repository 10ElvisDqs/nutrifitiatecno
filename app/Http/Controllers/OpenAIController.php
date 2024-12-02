<?php

namespace App\Http\Controllers;
use App\Services\OpenAIService;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class OpenAIController extends Controller
{
    //



    protected $openAIService;

    public function __construct(OpenAIService $openAIService)
    {
        $this->openAIService = $openAIService;
        // dd($this->openAIService );
    }

    public function generateText()
    {

        return $this->openAIService->generateText();
        $template = DB::table('prompts')->where('name', 'training_plan')->value('template');
        // dd($template);
        $data = [
            '{{goal}}' => 'ganar Musculo',
            '{{muscles}}' => 'biceps,pectorales,gluten,gemelos',
            '{{days}}' => 3,
            '{{level}}' => 'medio',
            '{{equipment}}' => 'peso corporal',
            '{{age}}' => 23,
            '{{gender}}' => 'masculino',
            '{{height}}' => 1.69,
            '{{weight}}' => 75.90,
        ];
        // $prompt = strtr($template, $data);

        $prompt = str_replace(array_keys($data), array_values($data), $template);
        return $prompt;

        // echo $prompt;
    }
        public function generateTrainingPlan()
        {
            return "generateTrainingPlan jjo";
            $template = DB::table('prompts')->where('name', 'training_plan')->value('template');
            // dd($template);
            $data = [
                '{{goal}}' => 'ganar Musculo',
                '{{muscles}}' => 'biceps,pectorales,gluten,gemelos',
                '{{days}}' => 3,
                '{{level}}' => 'medio',
                '{{equipment}}' => 'peso corporal',
                '{{age}}' => 23,
                '{{gender}}' => 'masculino',
                '{{height}}' => 1.69,
                '{{weight}}' => 75.90,
            ];
            // $prompt = strtr($template, $data);

            $prompt = str_replace(array_keys($data), array_values($data), $template);
            dd($this->openAIService->generateTrainingPlan($prompt));
        }
}
