@extends('layouts.base')

@section('main')
    <div class="fixed-header">
        @include('partials.menu')
    </div>
    <div class="content">
        @yield('content')
    </div>

    @include('partials.footer')

@stop

