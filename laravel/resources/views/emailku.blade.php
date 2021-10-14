@component('mail::message')
{{-- # Introduction --}}
# Halo, {{ $data['nama_pengirim'] }}
<p class="pertanyaan_card"> "{{ $data['pesan_pengirim'] }}" </p>

<div class="card">
    {{ $data['pesan'] }}

</div>
 @component('mail::button', ['url' => $data['url']]) 
Visit
@endcomponent 

Regards,<br>
{{ config('app.name') }}
@endcomponent
