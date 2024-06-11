<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;
use Gemini\Laravel\Facades\Gemini;
use Gemini\Data\Content;
use Gemini\Data\Role;
use Gemini\Enums\Role as EnumsRole;

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

        $chat = Gemini::chat()->startChat(history: [
            Content::parse(part: 'The stories you write about what I have to say should be one line. Is that clear?'),
            Content::parse(part: 'Yes, I understand. The stories I write about your input should be one line long.', role: EnumsRole::MODEL)
        ]);

        $result = $chat->sendMessage($this->input);

        $this->chats[] = [
            'user' => 'ai',
            'response' => $result->text()
        ];

        // dd($result->text());
    }
}
