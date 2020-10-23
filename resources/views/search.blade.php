@extends('layouts.layout')

@section('title', 'Page view cart')

@section('content')

    @foreach ($products as $item)
        {{$item->name}}
    @endforeach


    
@endsection