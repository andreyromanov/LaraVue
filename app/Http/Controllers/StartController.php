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

}
