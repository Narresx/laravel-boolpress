@component('mail::message')
    # Introduction

    <p>{{ contact['email'] }}</p>
    <p>{{ contact['message'] }}</p>


    @component('mail::button', ['url' => ''])
        Button Text
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
