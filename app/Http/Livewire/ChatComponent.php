<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ChatComponent extends Component
{
    public $userId;
    public $messageText;

    public $designTemplate = 'tailwind';

    /*public function render()
    {
        $messages = Message::with('user')
            ->latest()
            ->take(10)
            ->get()
            ->sortBy('id');
        return view('livewire.'.$this->designTemplate.'chat', compact('messages'));
    }
    to be continued
     */

    public function sendMessage()
    {
        Message::create([
            'user_id' => $this->userId,
            'message_text' => $this->messageText
        ]);

        $this->reset('messageText');
    }
    public function render()
    {
        return view('livewire.chat-component')->layout('layouts.base');
    }
}
