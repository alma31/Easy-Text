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
	public function postForm($nbWords = 5){
		$faker = Faker\Factory::create();
		$input = $_POST['inputNbr'];
		$radio1 = $_POST['optionsRadios1'];
		$radio2 = $_POST['optionsRadios1'];
		$radio3 = $_POST['optionsRadios1'];
		// $word = $faker->word;

		for ($i=0; $i < 10; $i++) {
			echo $faker->word, "\n";
			
		}
		

	}
}