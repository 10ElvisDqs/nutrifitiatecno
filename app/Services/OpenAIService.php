<?php

namespace App\Services;
use OpenAI\Laravel\Facades\OpenAI;
// use GuzzleHttp\Client;

class OpenAIService
{
    protected $client='elvis';
    protected $apiKey='asdasd';

    public function __construct()
    {
        // $this->client = new Client([
        //     'base_uri' => 'https://api.openai.com/v1/',
        //     'timeout' => 10,
        // ]);

        // $this->apiKey = env('OPENAI_API_KEY'); // Llave API desde el archivo .env
    }

    public function generateTrainingPlan($prompt){
        try {
            $response=OpenAI::chat()->create([
                'model' => 'gpt-4o-mini',
                'messages' => [
                    ['role' => 'system', 'content' => 'Eres un experto en Entrenador Fitness y planificación de entrenamientos.'],
                    ['role' => 'user', 'content' => $prompt],
                ],
                'max_tokens' => 1000,
                'temperature' => 0.5,
            ]);
            // Retornamos la respuesta generada
            return $response['choices'][0]['message']['content'] ?? 'No se pudo generar una respuesta';

        } catch (\Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    public function generateText()
    {
        try {
            $response=OpenAI::chat()->create([
                'model' => 'gpt-4o-mini',
                'messages' => [
                    ['role' => 'system', 'content' => 'Eres un experto en nutrición y planificación de dietas.'],
                    ['role' => 'user', 'content' => "saluda como si jueras un expete en oratoria"],
                ],
                'max_tokens' => 2000,
                'temperature' => 0.7,
            ]);

            // if (preg_match('/\{.*\}/s',$response['choices'][0]['message']['content'], $matches)) {
            //     // Extracción del JSON limpio
            //     $jsonContent = $matches[0];
            // } else {
            //     throw new \Exception("La respuesta no contiene un JSON válido.");
            // }

            // Decodificar el JSON a un array asociativo
            // $data = json_decode($jsonContent, true);

            // Retornamos la respuesta generada
            return $response['choices'][0]['message']['content'] ?? 'No se pudo generar una respuesta';

        } catch (\Exception $e) {
            return 'Error: ' . $e->getMessage();
        }


    }

    public function generateImage(string $prompt, int $n = 1, string $size = '1024x1024'): array
    {
        $response = $this->client->post('images/generations', [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->apiKey,
                'Content-Type' => 'application/json',
            ],
            'json' => [
                'prompt' => $prompt,
                'n' => $n,
                'size' => $size,
            ],
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }
}

