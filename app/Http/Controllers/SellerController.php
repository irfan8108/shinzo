<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SellerController extends ProcessController
{
    public function index(){
    	$data['isStoreExist'] = $this->storeExit();
		return view('seller.welcome')->with($data);
	}
	public function profile(){
		return view('seller.profile');
	}
	public function create(Request $request, $type){
		if($request->isMethod('get')){
			$data = [];

			if($type == 'store'){
				if($this->storeExit()){
					return redirect()->route('s.index')->with('error', 'Store already exist!');
				}
				// GET STATES
				$data['states'] = $this->getStates(1);
			}

			if($type == 'product'){
				// GET CATEGORIES
				$data['categories'] = $this->getCategories(1);
			}

			if($type == 'customer'){
				$request->session()->reflash();
			}

			if($type == 'promocode'){
				// SET FLASH SESSION
				$request->session()->flash('redirect', ['route'=>'create','parameter'=>['promocode'],'data'=>null]);

				// GET CUSTOMERS
				$data['customers'] = $this->getCustomers();
			}

			return view('seller.create.'.$type)->with($data);
		}

		else{
			switch ($type) {
				case 'store':
					if($this->storeExit()){
						return redirect()->route('s.index')->with('error', 'Store already exist!');
					}
					Validator::make($request->all(), [
					    'trade_name' => 'required',
					    'state' => 'required',
					    'city' => 'required',
					    'market_id' => 'required',
					    'pin_code' => 'required',
					    'gst' => 'required',
					    'tin' => 'required',
					    'pan' => 'required',
					    'email' => 'required',
					    'mobile' => 'required',
					    'business_address' => 'required',
					    'bank' => 'required',
					    'account_number' => 'required',
					    'ifsc' => 'required',
					    'branch' => 'required'
					])->validate();
					$data = $request->all();
					$data['store_name'] = $data['trade_name'];
					$data['user_id'] = session()->get('user_id');
					$result = $this->store(new \App\Store(), $data);
					if($result['status']){
						return redirect()->route('s.index')->with('success', 'Congratulation! Store successfully created.');
					}
					return back()->with('error', 'Whoops, Something went wrong? Please try after sometime');
					break;

				case 'product':
					Validator::make($request->all(), [
					    'category_id' => 'required',
					    'name' => 'required',
					    'quality' => 'required',
					    'details' => 'required',
					    'price_mrp' => 'required',
					    'price_offer' => 'required',
					    'image' => 'required'
					])->validate();
					// dd($request->all());

					// GET REQUEST INTO ARRAY
					$data = $request->all();

					// UPLOAD IMAGE
					$imageName = time().'.'.$request->image->extension();  
		            $request->image->move(public_path('uploads'), $imageName);
		            $data['image'] = $imageName;

		            // SET DEFAULT MIN ORDER, IF NULL
		            $data['min_order'] = is_null($data['min_order']) ? 1 : $data['min_order'];

					$data['user_id'] = session()->get('user_id');

					$result = $this->store(new \App\Product(), $data);
					if($result['status']){

						// ADD PRODUCT TAGS
						if(!empty($data['tags'])){
							foreach ($data['tags'] as $value) {
								$this->store(new \App\ProductTag(), ['product_id' => $result['id'], 'tag_id'=>$value]);
							}
						}

						return redirect()->route('s.index')->with('success', 'Thanks! Product successfully added.');
					}
					return back()->with('error', 'Whoops, Something went wrong? Please try after sometime');
					break;

				case 'customer':
					Validator::make($request->all(), [
					    'name' => 'required',
					    'mobile' => 'required'
					])->validate();
					// dd($request->all());

					// GET REQUEST INTO ARRAY
					$data = $request->all();
					$data['type'] = 'b';

					$result = $this->createUser($data);
					// dd(session()->all());
					if(session()->has('redirect')){
						return redirect()->route(session()->get('redirect.route'), session()->get('redirect.parameter'))->with('success', 'Customer successfully created.');	
					}

					return redirect()->route('s.index')->with('success', 'Customer successfully created.');

					break;
				
				default:
					dd('type not defined');
					break;
			}
		}
	}
	public function update(Request $request, $type){
		if($request->isMethod('get')){
			$data = [];

			if($type == 'store'){
				// GET STATES
				$data['states'] = $this->getStates(1);
				// GET STORE DETAILS
				$data['store'] = \App\Store::where('user_id',session()->get('user_id'))->with('market')->first()->toArray();
				// dd($data);
			}

			return view('seller.update.'.$type)->with($data);
		}

		else{
			switch ($type) {
				case 'store':
					Validator::make($request->all(), [
					    'trade_name' => 'required',
					    'state' => 'required',
					    'city' => 'required',
					    'market_id' => 'required',
					    'pin_code' => 'required',
					    'gst' => 'required',
					    'tin' => 'required',
					    'pan' => 'required',
					    'email' => 'required',
					    'mobile' => 'required',
					    'business_address' => 'required',
					    'bank' => 'required',
					    'account_number' => 'required',
					    'ifsc' => 'required',
					    'branch' => 'required'
					])->validate();
					$data = $request->all();
					$data['store_name'] = $data['trade_name'];
					$data['user_id'] = session()->get('user_id');
					$result = $this->store(new \App\Store(), $data);
					if($result['status']){
						return redirect()->route('s.index')->with('success', 'Congratulation! Store successfully created.');
					}
					return back()->with('error', 'Whoops, Something went wrong? Please try after sometime');
					break;

				case 'product':
					# code...
					break;
				
				default:
					dd('type not defined');
					break;
			}
		}
	}
	public function view($type){
		return view('seller.view.'.$type);
	}
}
