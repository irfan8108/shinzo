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
		switch ($type) {
			case 'store':
				return view('seller.create.store');
				break;
			case 'product':
				return view('seller.create.product');
				break;
			
			default:
				dd('create type not defined');
				break;
		}
	}
}
