<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Development extends Model
{
    public function add_developer($developer)
    {
    	/*CHECK ADDRESS IF EXIST ALREADY*/
    	$address = DB::table('tbl_address')
                     ->select('id')
                     ->where('line1', '=', $developer['address1'])
                     ->where('line2', '=', $developer['address2'])
                     ->where('city', '=', $developer['city'])
                     ->where('state', '=', $developer['state'])
                     ->where('country', '=', $developer['country'])
                     ->orderBy('id', 'desc')
                     ->first();


  		if( empty($address) ){

  			/*INSERT ADDRESS*/
	    	DB::table('tbl_address')->insert(
	            [
	                'line1'     => $developer['address1'], 
	                'line2'     => $developer['address2'], 
	                'city'      => $developer['city'],
	                'state'     => $developer['state'],
	                'country'   => $developer['country']
	            ]
	        );
	        /*GET ADDRESS ID */
        	$address_id = DB::getPdo()->lastInsertId();
  		} 
  		else
  		{
  			$address_id = $address->id;

  		}                  

        echo "<pre>"; print_r($address_id); echo "</pre>";
        die;
    }
}
