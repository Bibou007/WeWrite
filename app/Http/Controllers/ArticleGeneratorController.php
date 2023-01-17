<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenAI;
use OpenAI\ValueObjects\ApiKey;

class ArticleGeneratorController extends Controller
{
    function index()
    {
        return view('index');
    }

    function generate(Request $request)
    {
        $demande = $request->text;

        // $client = OpenAI::client(
        //     apiToken:config(
        //         key:'openai.api-key',
        //     ),
        // );

        $client = OpenAI::client('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');

        $result = $client->completions()->create([
            'temperature'=>0,
            'top_p'=>1,
            'frequency_penalty'=>0,
            'presence_penalty'=>0,
            'model' => 'text-davinci-003',
            'max_tokens'=>1000,
            'prompt' => "Redige moi un article sur la $demande",
        ]);
        
        
        $content=trim($result['choices'][0]['text']);
        
        return view('text', ['content'=>$content,'demande'=>$demande]);
    }
}
