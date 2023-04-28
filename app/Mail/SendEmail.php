<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $status;
    public $nama;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(string $status, string $nama)
    {
        $this->status = $status;
        $this->nama = $nama;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $status = $this->status;
        $nama = $this->nama;
        return $this->subject('Status permintaan data anda', $status)->markdown('components.super-admin.permintaan-data.seend-email', compact('status', 'nama'));
    }
}
