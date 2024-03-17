<?php

namespace App\Livewire;

use App\Models\Inquiry;
use Livewire\Component;

class InquiryForm extends Component
{
    public string $name;
    public string $email;
    public string $message;
    public bool $sent;

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
        'message' => 'required|min:20'
    ];

    public function send(): void
    {
        $this->validate();

        $inquiry = Inquiry::create([
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
            'sent_at' => now()
        ]);

        $inquiry->sendMail();

        $this->sent = true;
    }

    public function render()
    {
        return view('livewire.inquiry-form');
    }
}
