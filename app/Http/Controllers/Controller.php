<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // TO CREATE AND UPDATE DATA
    public function store($obj, $data){
    	// GET FILLABLES
    	$fillables = $obj->getTableColumns();

    	// LOOP THROUGH AVAILABLE ATTRIBUTES
    	foreach ($data as $key => $value) {
    		// CHECK EXSITANCE IN FILLABLE
    		if(in_array($key, $fillables)){
    			// EXIST, BIND INTO OBJECT
    			$obj->$key = $value;
    		}
    	}

    	// PROCEED TO STORE DATA
    	if($obj->save()){
    		// DATA INSERTED
    		// RETURN WITH INSERT ID
    		return ['status'=>true, 'id'=>$obj->id];
    	}
    	// DATA NOT INSERTED
    	return ['status'=>false];
    }

}
