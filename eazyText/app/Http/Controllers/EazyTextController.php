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

	public function getForm(Request $request){
		$faker = Faker\Factory::create();
		// $this->validate($request, [
		// 	'optionsRadios' => 'in:1,2,3'
		// 	]);
		$inputRadio = $request->input('optionsRadios');
		$inputNbr = $request->input('inputNbr');
		return view('easyText', ['faker'=> $faker, 'inputRadio'=>$inputRadio, 'inputNbr'=>$inputNbr]);

	}
}