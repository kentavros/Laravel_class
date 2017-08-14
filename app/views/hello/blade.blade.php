@extends('hello.layout')
@section('content')
<p>This is my content</P>
@stop


@section('head')
@parent
<p> new Head </p>
@stop
