<?php
namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
Use Illuminate\Http\Request;


class IndexController extends Controller{

	public function index(){

		return view('homes.index');
	}
}
