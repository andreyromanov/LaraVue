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
		]
	)
	];
}

}
