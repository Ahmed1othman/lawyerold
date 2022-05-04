@component('mail::message')
    مرحبا استاذ: عبدالله منصور
# {{$message}}

@component('mail::panel')
  <br>   اسم طالب الخدمة : {{$data->name}}
  <br> رقم طالب الخدمة :  {{$data->phone}}
  <br> نوع الخدمة المطلوبة :  {{$data->type}}
@endcomponent

@component('mail::button', ['url' => $url])
تفاصيل الطلب
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
