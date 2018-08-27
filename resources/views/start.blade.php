@extends('layouts.app')

@section('content')
<h1 align="center">Start Blade!</h1>
<example-component></example-component>

<h1 align="center">Prop Component!</h1>
<prop-component :urldata="{{json_encode($url_data)}}"></prop-component>

<h1 align="center">Ajax Component</h1>
<ajax-component></ajax-component>

<h1 align="center">ChartLine Component !!!</h1>
<chartline-component></chartline-component>


<h1 align="center">ChartPie Component !!!</h1>
<chartpie-component></chartpie-component>

<h1 align="center">Chart Random Component !!!</h1>
<chartrandom-component></chartrandom-component>

<h1 align="center">Chart Live Component !!!</h1>
<socket-component></socket-component>
@endsection