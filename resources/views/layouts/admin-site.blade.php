@extends('layouts.base', ['bodyClass' => 'admin ' . $bodyClass])

@section('main')
    <div id="admin-container">
        <div class="fixed-header bg-black">
            @include('partials.admin-menu')
        </div>
        <div class="content">
            <div class="row">
                <div class="column small-12">
                    <p class="padding-top-1 text-right">account: <strong>{{$userAccount['name']}}</strong></p>
                </div>
            </div>
            @yield('content')
        </div>
    </div>
@stop

