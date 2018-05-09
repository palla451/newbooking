@extends('layouts.app')

@section('content')
    <form action="{{action('TestController@store')}}" method="POST">

        {{ csrf_field() }}

        <input type="text" name="nome_sede" id="nome_sede">

        <button type="submit">invio</button>
    </form>

    @endsection