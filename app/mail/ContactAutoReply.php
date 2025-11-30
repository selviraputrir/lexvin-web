<?php

namespace App\Mail;

use App\Models\ContactMessage;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactAutoReply extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Objek pesan kontak yang baru dibuat.
     *
     * @var \App\Models\ContactMessage
     */
    public $message;

    /**
     * Buat instance pesan baru.
     *
     * @param ContactMessage $message
     * @return void
     */
    public function __construct(ContactMessage $message)
    {
        $this->message = $message;
    }

    /**
     * Dapatkan amplop pesan (subjek dan alamat pengirim).
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Konfirmasi Penerimaan Pesan dari LEXVIN',
        );
    }

    /**
     * Dapatkan definisi konten pesan.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.contact.contact_auto_reply',
        );
    }
}