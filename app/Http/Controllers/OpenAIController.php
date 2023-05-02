<?php

namespace App\Http\Controllers;

use App\Models\OpenAI;
use App\Http\Requests\StoreOpenAIRequest;
use App\Http\Requests\UpdateOpenAIRequest;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class OpenAIController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
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
        $client = new Client();
        $response = $client->post('https://api.openai.com/v1/engines/davinci-codex/completions', [
            'headers' => [
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer YOUR_API_KEY',
            ],
            'json' => [
                'prompt' => $request->nome,
                'temperature' => 0.5,
                'max_tokens' => 50,
            ],
        ]);
        $data = json_decode($response->getBody(), true);
        return response()->json(['response' => $data['choices'][0]['text']]);
    
    }

    /**
     * Display the specified resource.
     */
    public function show(OpenAI $openAI)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OpenAI $openAI)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOpenAIRequest $request, OpenAI $openAI)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OpenAI $openAI)
    {
        //
    }
}
