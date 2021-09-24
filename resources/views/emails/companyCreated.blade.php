@component('mail::message')
{{ config('app.name') . " Company" }}
<br>


<p>
    Company created
</p>


Thanks,<br>
{{ config('app.name') }}

@endcomponent
