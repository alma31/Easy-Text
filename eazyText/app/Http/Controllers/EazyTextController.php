<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EazyText;

class EazyTextController extends Controller
{
	public function showApp(){
		return view('easyText');
	}
}
