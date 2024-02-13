@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
   <h1>Trains:</h1>
   <ul>
        @foreach ($trains as $train)
            <li>
                {{$train -> company }} - {{$train -> departure_station}} - {{$train -> arrival_station}} - {{$train -> departure_time}} - {{$train -> arrival_time}} - {{$train -> train_code}} - 
                @if ($train->on_time)
                    On time
                @else
                    Late
                @endif
                @if ($train->cancelled)
                - Cancelled
                @endif
            </li>
        @endforeach
   </ul>
@endsection
