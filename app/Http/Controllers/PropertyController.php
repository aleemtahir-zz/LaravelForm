<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MBence\OpenTBSBundle;
use App\Property;
class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('welcome');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //echo "<pre>"; print_r($request->all()); echo "</pre>";
        return view('forms.response');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // get the service
        //$TBS = $this->get('opentbs');

        // Include classes 
        //include_once('vendor/mbence/opentbs-bundle/MBence/OpenTBSBundle/lib/tbs_class.php'); // Load the TinyButStrong template engine 
        //include_once('vendor/mbence/opentbs-bundle/MBence/OpenTBSBundle/lib/tbs_plugin_opentbs.php'); // Load the OpenTBS plugin 

        // Initialize the TBS instance 
        $TBS = new clsTinyButStrong; // new instance of TBS 
        $TBS->Plugin(TBS_INSTALL, OPENTBS_PLUGIN); // load the OpenTBS plugin


        // load your template
        $TBS->LoadTemplate('templates/membership.docx');
        // replace variables
        $TBS->MergeField('a', array('v_first' => 'Ford Prefect'));
        // send the file
        $TBS->Show(OPENTBS_DOWNLOAD, 'file_name.docx');
        //return view('forms.property');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
