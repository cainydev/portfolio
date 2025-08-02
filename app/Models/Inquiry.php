<?php

namespace App\Models;

use App\Mail\ContactFormSenderNotification;
use App\Mail\ContactFormSubmissionNotification;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class Inquiry extends Model
{
    protected $guarded = [];
    protected $casts = ['sent_at' => 'datetime'];

    use HasFactory;

    public function sendMail(): void
    {
        // Send mail to me
        Mail::to('info@techbra.in')->queue(new ContactFormSubmissionNotification($this));

        // Send confirmation to customer
        Mail::to($this->email)->queue(new ContactFormSenderNotification($this));
    }
}
