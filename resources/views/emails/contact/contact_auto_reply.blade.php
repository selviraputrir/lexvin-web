@component('mail::message')

Terima Kasih Telah Menghubungi Kami!

Halo {{ $message->name }},

Kami telah menerima pesan Anda dan akan segera memprosesnya. Kami akan menghubungi Anda kembali dalam waktu maksimal 1x24 jam melalui email atau telepon.

Berikut adalah detail pesan yang telah Anda kirimkan:
Dikirim Pada

{{ $message->created_at->format('d F Y, H:i') }}

@if ($message->phone)



Nomor Kontak

{{ $message->phone }}

@endif



Pesan Anda:
@component('mail::panel')
{{ $message->message }}
@endcomponent

Mohon tunggu balasan dari tim kami.

Hormat kami,

Tim LEXVIN
@endcomponent