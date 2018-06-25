<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Development extends Model
{
    public function add_developer($developer)
    { 
        $address_id   = null;
        $dev_officer1 = null;
        $dev_officer2 = null;

        //UNSET KEYS WHICH ARE EMPTY
        scanArray($developer);

        //GET ADDRESS ID
        if(!empty($developer['address'])){

          $address_obj = $developer['address'];
          nullToString($address_obj);

          $address_id = get_address($address_obj);

        }
          
        //GET DEVELOPER OFFICER 1        
        if(!empty($developer['do1'])){

            $do1 = $developer['do1'];
            nullToString($do1);

            $dev_officer1 = get_officer($do1,'developer_officer',1);
        }
                    
        //GET DEVELOPER OFFICER 2
        if(!empty($developer['do2'])){

            $do2 = $developer['do2'];
            nullToString($do2);

            $dev_officer2 = get_officer($do2,'developer_officer',2);

        }  

        //Upload Developer Logo
        $dev_logo = upload_logo('logo');
        //pre($dev_logo);
        $logo_path = "";
        if($dev_logo['status'] == 1)
        {
          $logo_path = $dev_logo['path'];
        }

        //******************
        //ADD DEVELOPER INFO
        //******************

        /*CHECK DEVELOPER INFO IF EXIST ALREADY*/
        $dev_info = DB::table('tbl_developer_detail')
                       ->select('id')
                       ->where('company_name', '=', $developer['company_name'])
                       ->where('officer_id_1', '=', $dev_officer1)
                       ->where('officer_id_2', '=', $dev_officer2)
                       ->where('mobile', '=', $developer['mobile'])
                       ->where('email', '=', $developer['email'])
                       ->where('address_id', '=', $address_id)
                       ->where('logo', '=', $logo_path)
                       ->orderBy('id', 'desc')
                       ->first();


        if( empty($dev_info) ){

          /*INSERT DEV INFO */
          DB::table('tbl_developer_detail')->insert(
                [
                    'company_name'  => $developer['company_name'], 
                    'officer_id_1'  => $dev_officer1, 
                    'officer_id_2'  => $dev_officer2,
                    'mobile'        => $developer['mobile'],
                    'email'         => $developer['email'],
                    'address_id'    => $address_id,
                    'logo'          => $logo_path
                ]
            );
            /*GET DEV ID */
            $dev_id = DB::getPdo()->lastInsertId();
        } 
        else
        {
          $dev_id = $dev_info->id;

        }
        
        //echo "<pre>"; print_r($dev_id); echo "</pre>";
        
        return $dev_id;
    }

    public function add_developement($developement, $ids)
    { 
        $address_id     = null;
        $officer_id     = null;
        $developer_id   = $ids['developer'];
        $contractor_id  = $ids['contractor'];
        $payment_id     = $ids['payment'];

        //GET ADDRESS ID
        if(!empty($developement['address'])){

          $address_obj = $developement['address'];
          nullToString($address_obj);

          $address_id = get_address($address_obj);

        }
          
        //GET DEVELOPEMENT SURVEYOR        
        if(!empty($developement['surveyor'])){

            $surveyor = $developement['surveyor'];
            nullToString($surveyor);

            $officer_id = get_officer($surveyor,'development_surveyor');
        }

        //******************
        //ADD DEVELOPEMENT INFO
        //******************
        $total_lots_s       = null;
        $common_lots_s      = null;
        $residential_lots_s = null;

        if(!empty($developement['t_lots_i']))
          $total_lots_s = convertNumberToWord($developement['t_lots_i']);

        if(!empty($developement['r_lots_i']))
          $residential_lots_s = convertNumberToWord($developement['r_lots_i']);

        if(!empty($developement['c_lots_i']))
          $common_lots_s = convertNumberToWord($developement['c_lots_i']);

        /*CHECK DEVELOPEMENT DETAIL IF EXIST ALREADY*/
        $dev_info = DB::table('tbl_developement_detail')
                       ->select('id')
                       ->where('name',            '=', $developement['name'])
                       ->where('folio_no',        '=', $developement['folio_no'])
                       ->where('plan_no',         '=', $developement['plan_no'])
                       ->where('address_id',      '=', $address_id)
                       ->where('surveyor_id',     '=', $officer_id)
                       ->where('total_lots_i',    '=', $developement['t_lots_i'])
                       ->where('total_lots_s',    '=', $total_lots_s)
                       ->where('residential_lots_i', '=', $developement['r_lots_i'])
                       ->where('residential_lots_s', '=', $residential_lots_s)
                       ->where('common_lots_i',   '=', $developement['c_lots_i'])
                       ->where('common_lots_s',   '=', $common_lots_s)
                       ->where('lot_ids',         '=', $developement['lot_ids'])
                       ->where('rsrv_road_no',    '=', $developement['rsrv_road'])
                       ->orderBy('id', 'desc')
                       ->first();


        if( empty($dev_info) ){

          /*INSERT DEVELOPEMENT DETAIL */
          DB::table('tbl_developement_detail')->insert(
                [
                    'name'              => $developement['name'], 
                    'folio_no'          => $developement['folio_no'], 
                    'plan_no'           => $developement['plan_no'], 
                    'address_id'        => $address_id, 
                    'surveyor_id'       => $officer_id,
                    'developer_id'      => $developer_id,
                    'contractor_id'     => $contractor_id,
                    'payment_id'        => $payment_id,
                    'total_lots_i'      => $developement['t_lots_i'],
                    'total_lots_s'      => $total_lots_s,
                    'residential_lots_i'=> $developement['r_lots_i'],
                    'residential_lots_s'=> $residential_lots_s,
                    'common_lots_i'     => $developement['c_lots_i'],
                    'common_lots_s'     => $common_lots_s,
                    'lot_ids'           => $developement['lot_ids'],
                    'rsrv_road_no'      => $developement['rsrv_road']
                ]
            );
            /*GET DEV ID */
            $dev_id = DB::getPdo()->lastInsertId();
        } 
        else
        {
          $dev_id = $dev_info->id;

        }

        //echo "<pre>"; print_r($dev_id); echo "</pre>";
        
        return $dev_id;
    }

    public function add_contractor($contractor)
    { 
        $address_id  = null;
        $officer_id  = null;

        //UNSET KEYS WHICH ARE EMPTY
        scanArray($contractor);

        //GET ADDRESS ID
        if(!empty($contractor['address'])){

          $address_obj = $contractor['address'];
          nullToString($address_obj);

          $address_id = get_address($address_obj);

        }
          
        //GET CONTRACTOR OFFICER         
        if(!empty($contractor['co'])){

            $co = $contractor['co'];
            nullToString($co);

            $officer_id = get_officer($co,'contractor_officer');
        }


        //******************
        //ADD CONTRACTOR INFO
        //******************

        /*CHECK contractor INFO IF EXIST ALREADY*/
        $cont_info = DB::table('tbl_contractor_detail')
                       ->select('id')
                       ->where('company_name', '=', $contractor['company_name'])
                       ->where('officer_id', '=', $officer_id)
                       ->where('address_id', '=', $address_id)
                       ->orderBy('id', 'desc')
                       ->first();


        if( empty($cont_info) ){

          /*INSERT DEV INFO */
          DB::table('tbl_contractor_detail')->insert(
                [
                    'company_name'  => $contractor['company_name'], 
                    'officer_id'  => $officer_id,
                    'address_id'=> $address_id,
                ]
            );
            /*GET DEV ID */
            $cont_id = DB::getPdo()->lastInsertId();
        } 
        else
        {
          $cont_id = $cont_info->id;

        }

        //echo "<pre>"; print_r($cont_id); echo "</pre>";
        
        return $cont_id;
    }

    public function add_payment($payment)
    { 
        $fc_id       = null;

        //UNSET KEYS WHICH ARE EMPTY
        scanArray($payment);

        //GET FORIEGN CURRENCY ID
        if(!empty($payment['fc'])){

          $fc_obj = $payment['fc'];
          nullToString($fc_obj);

          $fc_id = get_foriegn_currency($fc_obj);

        }


        //******************
        //ADD PAYMENT DETAIL
        //******************
        $price_w  = null;
        $jprice_w = null;

        if(!empty($payment['price_i']))
          $price_w = convertNumberToWord($payment['price_i']);

        if(!empty($payment['jprice_i']))
          $jprice_w = convertNumberToWord($payment['jprice_i']);

        /*CHECK PAYMENT INFO IF EXIST ALREADY*/
        $payment_info = DB::table('tbl_dev_contract_payment')
                       ->select('id')
                       ->where('fc_id', '=', $fc_id)
                       ->where('price_i', '=', $payment['price_i'])
                       ->where('price_w', '=', $price_w)
                       ->where('j_price_i', '=', $payment['jprice_i'])
                       ->where('j_price_w', '=', $jprice_w)
                       ->where('deposit', '=', $payment['deposit'])
                       ->where('second_payment', '=', $payment['second_pay'])
                       ->where('third_payment', '=', $payment['third_pay'])
                       ->where('fourth_payment', '=', $payment['fourth_pay'])
                       ->where('final_payment', '=', $payment['final_pay'])
                       ->orderBy('id', 'desc')
                       ->first();


        if( empty($payment_info) ){

          /*INSERT CONTRACT PAYMENT DETAIL */
          DB::table('tbl_dev_contract_payment')->insert(
                [
                    'fc_id'         => $fc_id, 
                    'price_i'       => $payment['price_i'],
                    'price_w'       => $price_w,
                    'j_price_i'     => $payment['jprice_i'],
                    'j_price_w'      => $jprice_w,
                    'deposit'       => $payment['deposit'],
                    'second_payment'=> $payment['second_pay'],
                    'third_payment' => $payment['third_pay'],
                    'fourth_payment'=> $payment['fourth_pay'],
                    'final_payment' => $payment['final_pay'],
                ]
            );
            /*GET CONTRACT PAYMENT ID */
            $payment_id = DB::getPdo()->lastInsertId();
        } 
        else
        {
          $payment_id = $payment_info->id;

        }

        //echo "<pre>"; print_r($payment_id); echo "</pre>";
        
        return $payment_id;
    }


}
