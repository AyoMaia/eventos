@extends('layouts.app')

@section('title', 'Contato -')
{{--<section>--}}

{{--</section><h1 class="colo-white">Contato</h1>--}}
@section('content')
<div class="text-white">
    <h1>Entre em contato com a nossa equipe</h1>

    @foreach($users as $user)
        {{$user['name']}} - {{$user['email']}}
        <br>
    @endforeach
</div>

@endsection
