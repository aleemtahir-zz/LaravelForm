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
        $this->scanArray($developer);

        //GET ADDRESS ID
        if(!empty($developer['address'])){

          $address_obj = $developer['address'];
          $this->nullToString($address_obj);

          $address_id = $this->get_address($address_obj);

        }
          
        //GET DEVELOPER OFFICER 1        
        if(!empty($developer['do1'])){

            $do1 = $developer['do1'];
            $this->nullToString($do1);

            $dev_officer1 = $this->get_officer($do1,'developer_officer',1);
        }
                    
        //GET DEVELOPER OFFICER 2
        if(!empty($developer['do2'])){

            $do2 = $developer['do2'];
            $this->nullToString($do2);

            $dev_officer2 = $this->get_officer($do2,'developer_officer',2);

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
                       ->where('logo', '=', $developer['logo'])
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
                    'logo'          => $developer['logo']
                ]
            );
            /*GET DEV ID */
            $dev_id = DB::getPdo()->lastInsertId();
        } 
        else
        {
          $dev_id = $dev_info->id;

        }

        
        echo "<pre>"; print_r($dev_id); echo "</pre>";
        
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
          $this->nullToString($address_obj);

          $address_id = $this->get_address($address_obj);

        }
          
        //GET DEVELOPEMENT SURVEYOR        
        if(!empty($developement['surveyor'])){

            $surveyor = $developement['surveyor'];
            $this->nullToString($surveyor);

            $officer_id = $this->get_officer($surveyor,'development_surveyor');
        }

        //******************
        //ADD DEVELOPEMENT INFO
        //******************
        $total_lots_s       = '';
        $common_lots_s      = '';
        $residential_lots_s = '';

        if(!empty($developement['t_lots_i']))
          $total_lots_s = $this->convertNumberToWord($developement['t_lots_i']);

        if(!empty($developement['r_lots_i']))
          $residential_lots_s = $this->convertNumberToWord($developement['r_lots_i']);

        if(!empty($developement['c_lots_i']))
          $common_lots_s = $this->convertNumberToWord($developement['c_lots_i']);

        /*CHECK DEVELOPEMENT DETAIL IF EXIST ALREADY*/
        $dev_info = DB::table('tbl_developement_detail')
                       ->select('id')
                       ->where('name',            '=', $developement['name'])
                       ->where('folio_no',        '=', $developement['folio'])
                       ->where('plan_no',         '=', $developement['plan'])
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
                    'folio_no'          => $developement['folio'], 
                    'plan_no'           => $developement['plan'], 
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

        
        echo "<pre>"; print_r($dev_id); echo "</pre>";
        
        return $dev_id;
    }

    public function add_contractor($contractor)
    { 
        $address_id  = null;
        $officer_id  = null;

        //UNSET KEYS WHICH ARE EMPTY
        $this->scanArray($contractor);

        //GET ADDRESS ID
        if(!empty($contractor['address'])){

          $address_obj = $contractor['address'];
          $this->nullToString($address_obj);

          $address_id = $this->get_address($address_obj);

        }
          
        //GET CONTRACTOR OFFICER         
        if(!empty($contractor['co'])){

            $co = $contractor['co'];
            $this->nullToString($co);

            $officer_id = $this->get_officer($co,'contractor_officer');
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

        
        echo "<pre>"; print_r($cont_id); echo "</pre>";
        
        return $cont_id;
    }

    public function add_payment($payment)
    { 
        $fc_id       = null;

        //UNSET KEYS WHICH ARE EMPTY
        $this->scanArray($payment);

        //GET FORIEGN CURRENCY ID
        if(!empty($payment['fc'])){

          $fc_obj = $payment['fc'];
          $this->nullToString($fc_obj);

          $fc_id = $this->get_foriegn_currency($fc_obj);

        }


        //******************
        //ADD PAYMENT DETAIL
        //******************
        $price_w  = '';
        $Jprice_w = '';

        if(!empty($payment['price_i']))
          $price_w = $this->convertNumberToWord($payment['price_i']);

        if(!empty($payment['jprice_i']))
          $jprice_w = $this->convertNumberToWord($payment['jprice_i']);

        /*CHECK PAYMENT INFO IF EXIST ALREADY*/
        $payment_info = DB::table('tbl_dev_contract_payment')
                       ->select('id')
                       ->where('fc_id', '=', $fc_id)
                       ->where('price_i', '=', $payment['price_i'])
                       ->where('price_w', '=', $price_w)
                       ->where('j_price_i', '=', $payment['jprice_i'])
                       ->where('j_price_w', '=', $jprice_w)
                       ->where('deposit', '=', $payment['deposit'])
                       ->where('second_payment', '=', $payment['scnd_pay'])
                       ->where('third_payment', '=', $payment['thrd_pay'])
                       ->where('fourth_payment', '=', $payment['frth_pay'])
                       ->where('final_payment', '=', $payment['fnl_pay'])
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
                    'second_payment'=> $payment['scnd_pay'],
                    'third_payment' => $payment['thrd_pay'],
                    'fourth_payment'=> $payment['frth_pay'],
                    'final_payment' => $payment['fnl_pay'],
                ]
            );
            /*GET CONTRACT PAYMENT ID */
            $payment_id = DB::getPdo()->lastInsertId();
        } 
        else
        {
          $payment_id = $payment_info->id;

        }

        
        echo "<pre>"; print_r($payment_id); echo "</pre>";
        
        return $payment_id;
    }




    //***********************
    //***HELPER FUNCTION*****
    //***********************

    public function nullToString(&$array)
    {
      foreach ($array as $key => &$value) {
        if($array[$key] == null){
          $value = "";
        }
      }
    }

    public function scanArray(&$array)
    {
        foreach ($array as $key => $value) {

            if( is_array($value) ){
              $values = array_values($value);

              foreach ($values as $k => $v) {
                if(empty($v))
                  unset($values[$k]);
              }
              if(empty($values))
                unset($array[$key]);
            }
            /*else
            {
              if(empty($value))
                unset($array[$key]);
            }*/

        }

    }

    function convertNumberToWord($num = false)
    {
        $num = str_replace(array(',', ' '), '' , trim($num));
        if(! $num) {
            return false;
        }
        $num = (int) $num;
        $words = array();
        $list1 = array('', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten', 'eleven',
            'twelve', 'thirteen', 'fourteen', 'fifteen', 'sixteen', 'seventeen', 'eighteen', 'nineteen'
        );
        $list2 = array('', 'ten', 'twenty', 'thirty', 'forty', 'fifty', 'sixty', 'seventy', 'eighty', 'ninety', 'hundred');
        $list3 = array('', 'thousand', 'million', 'billion', 'trillion', 'quadrillion', 'quintillion', 'sextillion', 'septillion',
            'octillion', 'nonillion', 'decillion', 'undecillion', 'duodecillion', 'tredecillion', 'quattuordecillion',
            'quindecillion', 'sexdecillion', 'septendecillion', 'octodecillion', 'novemdecillion', 'vigintillion'
        );
        $num_length = strlen($num);
        $levels = (int) (($num_length + 2) / 3);
        $max_length = $levels * 3;
        $num = substr('00' . $num, -$max_length);
        $num_levels = str_split($num, 3);
        for ($i = 0; $i < count($num_levels); $i++) {
            $levels--;
            $hundreds = (int) ($num_levels[$i] / 100);
            $hundreds = ($hundreds ? ' ' . $list1[$hundreds] . ' hundred' . ' ' : '');
            $tens = (int) ($num_levels[$i] % 100);
            $singles = '';
            if ( $tens < 20 ) {
                $tens = ($tens ? ' ' . $list1[$tens] . ' ' : '' );
            } else {
                $tens = (int)($tens / 10);
                $tens = ' ' . $list2[$tens] . ' ';
                $singles = (int) ($num_levels[$i] % 10);
                $singles = ' ' . $list1[$singles] . ' ';
            }
            $words[] = $hundreds . $tens . $singles . ( ( $levels && ( int ) ( $num_levels[$i] ) ) ? ' ' . $list3[$levels] . ' ' : '' );
        } //end for loop
        $commas = count($words);
        if ($commas > 1) {
            $commas = $commas - 1;
        }
        $words = trim(implode(' ', $words) , " ");
        //Remove Duplicate White Space
        $words = preg_replace('!\s+!', ' ', $words);
        //Upper Case
        $words = ucwords($words);

        return $words;
    }

    public function get_address($address)
    {

      $mapper = array(
        'line1',
        'line2',
        'city',
        'state',
        'country',
      );

      foreach ($mapper as $key) {

        if( !array_key_exists($key, $address) )
          $address[$key] = '';
      }

      /*CHECK ADDRESS IF EXIST ALREADY*/
      $result = DB::table('tbl_address')
                     ->select('id')
                     ->where('line1', '=', $address['line1'])
                     ->where('line2', '=', $address['line2'])
                     ->where('city', '=', $address['city'])
                     ->where('state', '=', $address['state'])
                     ->where('country', '=', $address['country'])
                     ->orderBy('id', 'desc')
                     ->first();


      if( empty($result) ){

        /*INSERT ADDRESS*/
        DB::table('tbl_address')->insert(
              [
                  'line1'     => $address['line1'], 
                  'line2'     => $address['line2'], 
                  'city'      => $address['city'],
                  'state'     => $address['state'],
                  'country'   => $address['country']
              ]
          );
          /*GET ADDRESS ID */
          $address_id = DB::getPdo()->lastInsertId();
      } 
      else
      {
        $address_id = $result->id;

      }

      return $address_id;
    }

    public function get_officer($officer, $source='', $postfix='')
    {

      $mapper = array(
        'title',
        'first_name',
        'last_name',
        'suffix',
        'capacity',
        'landline',
      );

      foreach ($mapper as $key) {

        if( !array_key_exists($key, $officer) )
          $officer[$key] = '';
      }

      /*CHECK DEVELOPER OFFICER IF EXIST ALREADY*/
      $result = DB::table('tbl_person_info')
                     ->select('id')
                     ->where('title', '=', $officer['title'.$postfix]) 
                     ->where('first_name', '=', $officer['first'.$postfix])
                     ->where('last_name', '=', $officer['last'.$postfix])
                     ->where('suffix', '=', $officer['suffix'.$postfix])
                     ->where('capacity', '=', $officer['capacity'.$postfix])
                     ->where('landline', '=', $officer['landline'.$postfix])
                     ->where('source', '=', $source)
                     ->orderBy('id', 'desc')
                     ->first();


      if( empty($result) ){

        /*INSERT DEV OFFICER */
        DB::table('tbl_person_info')->insert(
              [
                  'title'     => $officer['title'.$postfix], 
                  'first_name'=> $officer['first'.$postfix], 
                  'last_name' => $officer['last'.$postfix],
                  'suffix'    => $officer['suffix'.$postfix],
                  'capacity'  => $officer['capacity'.$postfix],
                  'landline'  => $officer['landline'.$postfix],
                  'source'      => $source
              ]
          );
          /*GET DEV OFFICER ID */
          $officer_id = DB::getPdo()->lastInsertId();
      } 
      else
      {
        $officer_id = $result->id;
      }
      
      return $officer_id;

    }

    public function get_foriegn_currency($currency)
    {
      $mapper = array(
        'name',
        'symbol',
        'rate',
      );

      foreach ($mapper as $key) {

        if( !array_key_exists($key, $currency) )
          $currency[$key] = '';
      }

      /*CHECK CURRENCY IF EXIST ALREADY*/
      $result = DB::table('tbl_foriegn_currency')
                     ->select('id')
                     ->where('name', '=', $currency['name']) 
                     ->where('symbol', '=', $currency['symbol'])
                     ->where('exchange_rate', '=', $currency['rate'])
                     ->orderBy('id', 'desc')
                     ->first();


      if( empty($result) ){

        /*INSERT CURRENCY */
        DB::table('tbl_foriegn_currency')->insert(
              [
                  'name'     => $currency['name'], 
                  'symbol'=> $currency['symbol'], 
                  'exchange_rate' => $currency['rate'],
              ]
          );
          /*GET CURRENCY ID */
          $currency_id = DB::getPdo()->lastInsertId();
      } 
      else
      {
        $currency_id = $result->id;
      }
      
      return $currency_id;

    }
}
