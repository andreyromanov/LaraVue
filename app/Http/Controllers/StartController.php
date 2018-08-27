<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StartController extends Controller
{
	public function index() 
	{
		$url_data = [array(
			'title' => 'LaraVue',
			'url' =>'localhost:8000'
		),
		array(
			'title' => 'Andrew',
			'url'   => 'andrew.com'
		)
	];

	return view ('start', [
		'url_data' => $url_data
	]);
}

public function getJson()
{
	return [
		array(
			'title' => 'Google',
			'url'   => 'google.com'
		),
		array(
			'title' => 'GitHub',
			'url'   => 'github.com'
		)
	];
}

public function chartData() 
{
	return [
		'labels' => ['march', 'april', 'may', 'june'],
		'datasets' => array([
			'label' => 'Sales',
			'backgroundColor' => '#f26202',
			'data' => [15000, 5000, 11000, 25000]
		])
	];
}

public function chartRandom() 
{
	return [
		'labels' => ['march', 'april', 'may', 'june'],
		'datasets' => array([
			'label' => 'Gold',
			'backgroundColor' => '#16AB39',
			'data' => [rand(0,40000), rand(0,40000), rand(0,40000), rand(0,40000)]
		],
		[
			'label' => 'Silver',
			'backgroundColor' => '#f26202',
			'data' => [rand(0,40000), rand(0,40000), rand(0,40000), rand(0,40000)]
		],
		[
			'label' => 'Bronse',
			'backgroundColor' => 'blue',
			'data' => [rand(0,40000), rand(0,40000), rand(0,40000), rand(0,40000)]
		]
	)
	];
}

public function newEvent(\Illuminate\Http\Request $request)
{
	$result = [
		'labels' => ['march', 'april', 'may', 'june'],
		'datasets' => array([
			'label' => 'Sales',
			'backgroundColor' => '#f26202',
			'data' => [15000, 5000, 11000, 25000]
		])
	];
	if ($request->has('label')) {
		$result['labels'][] = $request->input('label');
		$result['datasets'][0]['data'][] = (integer)$request->input('sale');

		if ($request->has('realtime')) {
			if (filter_var($request->input('realtime'), FILTER_VALIDATE_BOOLEAN)) {
				event(new \App\Events\NewEvent($result));
			}
		}
	}
	return $result;
}

}
