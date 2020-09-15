<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FrontController extends ProcessController
{

	public function __construct()
	{
		
	}
    
	public function index($marketID = null, $marketName =null){
		if(is_null($marketID)){
			// dd(session()->get('market'));
			// SET MARKET NAME
			$data['marketName'] = session()->get('market.name');
			// GET ALL ACTIVE CATEGORIES
			$data['categories'] = $this->getCategories(1);
			// GET ALL SUPPLIERs WITHIN THE MARKET
			$data['suppliers'] = $this->getSuppliers(1, session()->get('market.id'));

			return view('front.welcome')->with($data);
		}
		$market = ['id' => $marketID, 'name' => $marketName];
		session()->put('market', $market);
		return redirect()->route('b.index');
	}
	public function userType(){
		return view('front.user_type');
	}
	public function select(Request $request, $type, $cmd = null){
		switch ($type) {
			case 'user':
				// dd($type."|".$cmd);
				if( !is_null($cmd) && ($cmd == 's' || $cmd == 'b') ){
					$request->session()->flash('role', $cmd);
					return redirect()->route('verification', 'mobile');
				}
				return back()->with('error', "Please select a valid user type");
				// return view('front.user_type');
				break;
			case 'state':
				return view('front.select_state')->with('cities',$this->getMarketCities(1));
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
				
				// CHECK USER SELECTED
				if(!session()->has('role')){
					return redirect()->route('whoU');
				}

				$request->session()->reflash();
				return view('front.verification.mobile_verification');
				break;
			
			case 'otp':

				// CHECK USER SELECTED
				if(!session()->has('role')){
					return redirect()->route('whoU');
				}

				$request->session()->reflash();

				Validator::make($request->all(), [
				    'name' => 'required',
				    'mobile' => 'required',
				])->validate();

				// VALIDATE AND STORE USER
				$user = $this->validateUser(array_merge($request->all(), ['type' => session()->get('role')]));

				// IF ALREADY VERIFIED, GO TO HOME
				if($user['mobile_verified'])

					return $this->redirectWithRole();

				// PROCEED TO VERIFY MOBILE
				if($this->proceedToMobileVerify()){
					return view('front.verification.mobile_otp');
				}
				break;

			case 'verify_otp':
				if($this->verifyOTP($request->all()))

					return $this->redirectWithRole();

				return back()->with('error', 'Please enter a valid code');

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