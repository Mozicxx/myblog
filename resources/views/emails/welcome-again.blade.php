@component('mail::message')
# Introduction

Welcome to my blog , {{ $user->name }}.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

@component('mail::panel', ['url' => ''])
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, nisi assumenda veritatis eveniet quae, ducimus, aspernatur ipsa cupiditate dolorum, nihil hic magni! Numquam magnam dolorum culpa fugiat quisquam, nisi quia.
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
