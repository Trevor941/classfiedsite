@component('mail::message')
# Introduction

The body of your message.

fullname : {{$data['name']}} <br>
email : {{$data['email']}} <br>
subject : {{$data['subject']}} <br>  
message : {{$data['message']}} <br>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
