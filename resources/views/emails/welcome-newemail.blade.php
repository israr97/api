@component('mail::message')
 <p> Hi {{ $data['name'] }}, You've have a new message</p>
@component('mail::panel')
Name: {{ $data['name'] }} <br>
Phone Number:  {{ $data['phone'] }} <br>
Message: {{ $data['message'] }}
@endcomponent
 {{-- Thanks </br> {{ config('app.name') }} --}}
 Thanks </br> 
@endcomponent