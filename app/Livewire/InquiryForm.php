<?php

namespace App\Livewire;

use App\Models\Inquiry;
use Illuminate\View\View;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Validate;
use Livewire\Component;

class InquiryForm extends Component
{
    #[Validate('required|min:3', as: 'Name')]
    public string $name = '';

    #[Validate('required|email', as: 'Email')]
    public string $email = '';

    #[Validate('required|min:10', as: 'Nachricht')]
    public string $message = '';

    #[Locked]
    public bool $sent = false;

    public function send(): void
    {
        $this->validate();

        Inquiry::create([
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
            'sent_at' => now()
        ])->sendMail();

        $this->sent = true;
    }

    public function resetForm(): void {
        $this->name = '';
        $this->email = '';
        $this->message = '';
        $this->sent = false;
    }

    public function render(): View
    {
        return view('livewire.inquiry-form');
    }
}
