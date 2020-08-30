<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function index(){
		return view('seller.welcome');
	}
	public function profile(){
		return view('seller.profile');
	}
	public function create($type){
		return view('seller.create.'.$type);
	}
	public function view($type){
		return view('seller.view.'.$type);
	}
}
