<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{

	public function __construct()
	{
		
	}
    
	public function index(){
		return view('front.welcome');
	}
	public function userType(){
		return view('front.user_type');
	}
	public function select(Request $request, $type){
		switch ($type) {
			case 'user':
				return view('front.user_type');
				break;
			case 'state':
				return view('front.select_state');
				break;
			case 'market':
				return view('front.select_market');
				break;
			
			default:
				dd('Country, India is auto selected');
				break;
		}
	}
	public function verification(Request $request, $type){
		switch ($type) {
			case 'mobile':
				return view('front.verification.mobile_verification');
				break;
			case 'otp':
				return view('front.verification.mobile_otp');
				break;
			
			default:
				dd('verification method not defined');
				break;
		}
	}
	public function basicDetails(){
		return view('front.verification.basic_details');
	}
	public function products(){
		return view('front.products');
	}

	public function category(){
		return view('front.category');
	}
	
	public function categories(){
		return view('front.categories');
	}

	public function seller(Request $request, $cmd){
		switch ($cmd) {
			case 'products':
				return view('front.seller_products');
				break;
			
			default:
				dd('seller cmd not defined');
				break;
		}
	}

}