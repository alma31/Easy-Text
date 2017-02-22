<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EazyText;


class EazyTextController extends Controller
{
	public function showApp(){
		return view('easyText');
	}

	public function useFaker(){
		$faker = Faker\Factory::create();
		return view ('easyText', ['faker' => $faker]);
	}
}
