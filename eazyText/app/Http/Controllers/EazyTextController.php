<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EazyText;
require_once '../vendor/fzaninotto/faker/src/autoload.php';
use Faker;



class EazyTextController extends Controller
{
	public function showApp(){
		return view('easyText');
	}

	public function useFaker(){
		$faker = Faker\Factory::create();
		return view ('easyText', ['faker' => $faker]);
	}
	public function postForm(){
		return view('easyText');
	}
}
