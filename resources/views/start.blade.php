@extends('layouts.app')

@section('content')
	<h1 align="center">Start Blade!</h1>

	<example-component></example-component>

	<h1 align="center">Prop Component!</h1>

	<prop-component :urldata="{{json_encode($url_data)}}"></prop-component>

	<h1 align="center">Ajax Component</h1>

	<ajax-component></ajax-component>

@endsection