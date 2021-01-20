@extends('layouts.app')

@section('content')
    @if($isActive)
        {{$message1}}
    @else
        {{$message2}}
    @endif

<h1>Hello world</h1>
@endsection
