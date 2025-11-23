@component('mail::message')

Pesan Kontak Baru Masuk!

Halo Admin,

Anda telah menerima pesan baru dari formulir kontak situs web. Mohon segera ditindaklanjuti.

Detail

Konten

Nama Pengirim

{{ $message->name }}

Email

[{{ $message->email }}](mailto:{{ $message->email }})

@if ($message->phone)



Telepon/WA

[{{ $message->phone }}](https://wa.me/{{ preg_replace('/[^0-9]/', '', $message->phone) }})

@endif



Dikirim Pada

{{ $message->created_at->format('d F Y, H:i') }}

Isi Pesan Lengkap:
@component('mail::panel')
{{ $message->message }}
@endcomponent

@component('mail::button', ['url' => route('admin.messages.index'), 'color' => 'success'])
Lihat & Tandai Dibaca di Dashboard
@endcomponent

Terima kasih.
@endcomponent