@extends('layouts.app')

@section('title', )

@section('content')

@section('hero')
    @include('/components/hero')
@endsection
@yield('hero')

@section('events')
    @include('/components/events')
@endsection
@yield('events')

@section('work')
    @include('/components/work')
@endsection
@yield('work')

@endsection
