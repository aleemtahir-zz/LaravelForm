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

            $dev_officer1 = $this->get_dev_officer($do1,1);
        }
                    
        //GET DEVELOPER OFFICER 2
        if(!empty($developer['do2'])){

            $do2 = $developer['do2'];
            $this->nullToString($do2);

            $dev_officer2 = $this->get_dev_officer($do2,2);

        }  

        //******************
        //ADD DEVELOPER INFO
        //******************

        /*CHECK DEVELOPER INFO IF EXIST ALREADY*/
        $dev_info = DB::table('tbl_developer_detail')
                       ->select('id')
                       ->where('company_name', '=', $developer['company_name'])
                       ->where('dev_officer1', '=', $dev_officer1)
                       ->where('dev_officer2', '=', $dev_officer2)
                       ->where('mobile', '=', $developer['mobile'])
                       ->where('email', '=', $developer['email'])
                       ->where('office_address', '=', $address_id)
                       ->where('logo', '=', $developer['logo'])
                       ->orderBy('id', 'desc')
                       ->first();


        if( empty($dev_info) ){

          /*INSERT DEV INFO */
          DB::table('tbl_developer_detail')->insert(
                [
                    'company_name'  => $developer['company_name'], 
                    'dev_officer1'  => $dev_officer1, 
                    'dev_officer2'  => $dev_officer2,
                    'mobile'        => $developer['mobile'],
                    'email'         => $developer['email'],
                    'office_address'=> $address_id,
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

    public function add_developement($developer)
    { 
        $address_id   = null;
        $dev_officer1 = null;
        $dev_officer2 = null;

        //UNSET KEYS WHICH ARE EMPTY
        $this->scanArray($developer);

        if(!empty($developer['address'])){

          $address_obj = $developer['address'];
          $this->nullToString($address_obj);

          /*CHECK ADDRESS IF EXIST ALREADY*/
          $address = DB::table('tbl_address')
                         ->select('id')
                         ->where('line1', '=', $address_obj['line1'])
                         ->where('line2', '=', $address_obj['line2'])
                         ->where('city', '=', $address_obj['city'])
                         ->where('state', '=', $address_obj['state'])
                         ->where('country', '=', $address_obj['country'])
                         ->orderBy('id', 'desc')
                         ->first();


          if( empty($address) ){

            /*INSERT ADDRESS*/
            DB::table('tbl_address')->insert(
                  [
                      'line1'     => $address_obj['line1'], 
                      'line2'     => $address_obj['line2'], 
                      'city'      => $address_obj['city'],
                      'state'     => $address_obj['state'],
                      'country'   => $address_obj['country']
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

        }
        echo "<pre>"; print_r($developer); echo "</pre>";
                
        if(!empty($developer['do1'])){

            $do1 = $developer['do1'];
            $this->nullToString($do1);

            /*CHECK DEVELOPER OFFICER IF EXIST ALREADY*/
            $dev_officer1 = DB::table('tbl_person_info')
                           ->select('id')
                           ->where('title', '=', $do1['title1'])
                           ->where('first_name', '=', $do1['first1'])
                           ->where('last_name', '=', $do1['last1'])
                           ->where('suffix', '=', $do1['suffix1'])
                           ->where('capacity', '=', $do1['capacity1'])
                           ->where('landline', '=', $do1['landline1'])
                           ->where('role', '=', 'developer_officer')
                           ->orderBy('id', 'desc')
                           ->first();


            if( empty($dev_officer1) ){

              /*INSERT DEV OFFICER ID 1 */
              DB::table('tbl_person_info')->insert(
                    [
                        'title'     => $do1['title1'], 
                        'first_name'=> $do1['first1'], 
                        'last_name' => $do1['last1'],
                        'suffix'    => $do1['suffix1'],
                        'capacity'  => $do1['capacity1'],
                        'landline'  => $do1['landline1'],
                        'role'      => 'developer_officer'
                    ]
                );
                /*GET DEV OFFICER ID 1 */
                $dev_officer1 = DB::getPdo()->lastInsertId();
            } 
            else
            {
              $dev_officer1 = $dev_officer1->id;

            }
        }
                    

        if(!empty($developer['do2'])){

            $do2 = $developer['do2'];
            $this->nullToString($do2);

            /*CHECK DEVELOPER OFFICER IF EXIST ALREADY*/
            $dev_officer2 = DB::table('tbl_person_info')
                           ->select('id')
                           ->where('title', '=', $do2['title2'])
                           ->where('first_name', '=', $do2['first2'])
                           ->where('last_name', '=', $do2['last2'])
                           ->where('suffix', '=', $do2['suffix2'])
                           ->where('capacity', '=', $do2['capacity2'])
                           ->where('landline', '=', $do2['landline2'])
                           ->where('role', '=', 'developer_officer')
                           ->orderBy('id', 'desc')
                           ->first();


            if( empty($dev_officer2) ){

              /*INSERT DEV OFFICER ID 2 */
              DB::table('tbl_person_info')->insert(
                    [
                        'title'     => $do2['title2'], 
                        'first_name'=> $do2['first2'], 
                        'last_name' => $do2['last2'],
                        'suffix'    => $do2['suffix2'],
                        'capacity'  => $do2['capacity2'],
                        'landline'  => $do2['landline2'],
                        'role'      => 'developer_officer'
                    ]
                );
                /*GET DEV OFFICER ID 2 */
                $dev_officer2 = DB::getPdo()->lastInsertId();
            } 
            else
            {
              $dev_officer2 = $dev_officer2->id;

            }

        }  

        //******************
        //ADD DEVELOPER INFO
        //******************

        /*CHECK DEVELOPER INFO IF EXIST ALREADY*/
        $dev_info = DB::table('tbl_developer_detail')
                       ->select('id')
                       ->where('company_name', '=', $developer['company_name'])
                       ->where('dev_officer1', '=', $dev_officer1)
                       ->where('dev_officer2', '=', $dev_officer2)
                       ->where('mobile', '=', $developer['mobile'])
                       ->where('email', '=', $developer['email'])
                       ->where('office_address', '=', $address_id)
                       ->where('logo', '=', $developer['logo'])
                       ->orderBy('id', 'desc')
                       ->first();


        if( empty($dev_info) ){

          /*INSERT DEV INFO */
          DB::table('tbl_developer_detail')->insert(
                [
                    'company_name'  => $developer['company_name'], 
                    'dev_officer1'  => $dev_officer1, 
                    'dev_officer2'  => $dev_officer2,
                    'mobile'        => $developer['mobile'],
                    'email'         => $developer['email'],
                    'office_address'=> $address_id,
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

        
        echo "<pre>"; print_r($dev_officer1); echo "</pre>";
        echo "<pre>"; print_r($dev_officer2); echo "</pre>";
        echo "<pre>"; print_r($dev_id); echo "</pre>";
        
        return $dev_id;
    }

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

    public function get_address($address)
    {
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

    public function get_dev_officer($dev_officer, $postfix='')
    {

      /*CHECK DEVELOPER OFFICER IF EXIST ALREADY*/
      $result = DB::table('tbl_person_info')
                     ->select('id')
                     ->where('title', '=', $dev_officer['title'.$postfix])
                     ->where('first_name', '=', $dev_officer['first'.$postfix])
                     ->where('last_name', '=', $dev_officer['last'.$postfix])
                     ->where('suffix', '=', $dev_officer['suffix'.$postfix])
                     ->where('capacity', '=', $dev_officer['capacity'.$postfix])
                     ->where('landline', '=', $dev_officer['landline'.$postfix])
                     ->where('role', '=', 'developer_officer')
                     ->orderBy('id', 'desc')
                     ->first();


      if( empty($result) ){

        /*INSERT DEV OFFICER */
        DB::table('tbl_person_info')->insert(
              [
                  'title'     => $dev_officer['title'.$postfix], 
                  'first_name'=> $dev_officer['first'.$postfix], 
                  'last_name' => $dev_officer['last'.$postfix],
                  'suffix'    => $dev_officer['suffix'.$postfix],
                  'capacity'  => $dev_officer['capacity'.$postfix],
                  'landline'  => $dev_officer['landline'.$postfix],
                  'role'      => 'developer_officer'
              ]
          );
          /*GET DEV OFFICER ID */
          $dev_officer_id = DB::getPdo()->lastInsertId();
      } 
      else
      {
        $dev_officer_id = $result->id;
      }
      
      return $dev_officer_id;

    }


}
