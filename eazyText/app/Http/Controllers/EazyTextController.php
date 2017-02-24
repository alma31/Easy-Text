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

	public function postForm($nbWords = 10){
		$faker = Faker\Factory::create();
		$input = $_POST['inputNbr'];
		$radio = $_POST['optionsRadios'];
		$valid = $_POST['valid'];
		
			if (isset($input) && isset($radio) && isset($valid)){
				return view ('easyText', ['faker' => $faker,'input' => $input, 'radio' => $radio ]);
			
			}elseif (empty($input && isset($radio) && isset($valid))) {
			return alert('Champs vide');
		}
	}
}