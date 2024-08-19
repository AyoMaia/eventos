@extends('layouts.app')

@section('title', 'Contato -')
{{--<section>--}}

{{--</section><h1 class="colo-white">Contato</h1>--}}
@section('content')
<div class="text-white">

    @foreach($users as $user)
        {{$user['name']}} - {{$user['email']}}
        <br>
    @endforeach
</div>

@endsection
