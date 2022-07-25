<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Visitante;

class VisitanteMail extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = 'Información de acreditación Expo Detalles Perú 2022';

    protected $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Visitante $data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.visitante', ['data'=> $this->data]);
    }
}
