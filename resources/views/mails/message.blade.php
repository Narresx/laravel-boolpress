@component('mail::message')
    # Introduction

    ** {{ $contact['email'] }}**
    ** {{ $contact['message'] }}**


    @component('mail::button', ['url' => ''])
        Button Text
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
