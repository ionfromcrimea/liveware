@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-7 mx-auto">
            <h1 class="text-success">LiveWire</h1>
{{--            <h3>Все записи</h3>--}}

{{--            <livewire:post-component>--}}
            @livewire('post-component')

        </div>
    </div>
@endsection
