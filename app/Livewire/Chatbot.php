<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;
use OpenAI\Laravel\Facades\OpenAI;

class Chatbot extends Component
{

    public array $chats = [

        ['user' => 'human', 'request' => ''],
        ['user' => 'ai', 'response' => ''],

    ];

    public string $input = '';


    public function render(): View
    {
        return view('livewire.chatbot');
    }
    
    public function submit()
    {
        $this->chats[] = [
            'user' => 'human',
            'request' => $this->input,
        ];

        $result = OpenAI::chat()->create([
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                ['role' => 'user', 'content' => $this->input],
            ],
        ]);

        $this->chats[] = [
            'user' => 'ai',
            'response' => $result->choices[0]->message->content
        ];

       // dd($result->choices[0]->message->content);
    }
}
