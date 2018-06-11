<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    function save_doc($filename='', $vendor='', $buyer='', $property='')
	{	
		
		if(empty($filename))
			return false;
		if(empty($vendor))
			return false;


		// Include classes 
        // Load the TinyButStrong template engine 
        require_once base_path('vendor/mbence/opentbs-bundle/MBence/OpenTBSBundle/lib/tbs_class.php'); 
        // Load the OpenTBS plugin 
        require_once base_path('vendor/mbence/opentbs-bundle/MBence/OpenTBSBundle/lib/tbs_plugin_opentbs.php'); 

        // Initialize the TBS instance 
        $TBS = new \clsTinyButStrong; // new instance of TBS 
        $TBS->Plugin(TBS_INSTALL, OPENTBS_PLUGIN); // load the OpenTBS plugin

		
		// ----------------- 
		// Load the template 
		// ----------------- 
		$template = 'templates/'.$filename.'.docx'; 

		$TBS->LoadTemplate($template/*, OPENTBS_ALREADY_UTF8*/); // Also merge some [onload] automatic fields (depends of the type of document). 

		// ---------------------- 
		// Debug mode of the demo 
		// ---------------------- 
		if (isset($_POST['debug']) && ($_POST['debug']=='current')) $TBS->Plugin(OPENTBS_DEBUG_XML_CURRENT, true); // Display the intented XML of the current sub-file, and exit. 
		if (isset($_POST['debug']) && ($_POST['debug']=='info'))    $TBS->Plugin(OPENTBS_DEBUG_INFO, true); // Display information about the document, and exit. 
		if (isset($_POST['debug']) && ($_POST['debug']=='show'))    $TBS->Plugin(OPENTBS_DEBUG_XML_SHOW); // Tells TBS to display information when the document is merged. No exit. 

		// -------------------------------------------- 
		// Merging and other operations on the template 
		// -------------------------------------------- 
		echo "<pre>";print_r($property);echo "</pre>";
		// Merge data in the body of the document 
		$TBS->MergeBlock('a', $vendor); 
		//$TBS->MergeBlock('b', $property); 
		//$TBS->MergeField('block1',$property);
		// Merge data in colmuns 
		
		// ----------------- 
		// Output the result 
		// ----------------- 
		$var = file_get_contents('counter.txt');
		$var++;
		file_put_contents('counter.txt', $var);

		if($var < 10)
			$var = "0".$var;

		// Define the name of the output file 
		$save_as	= 	'new1'.$var;

		if(!empty($data[0][v_last]))
			$vendor = $data[0][v_last];
		else
			$vendor = 'vendor';
		if(!empty($data[0][v_last]))
			$buyer = $data[0][v_last];
		else
			$buyer = 'buyer';

		$output_file_name = $vendor."_".$buyer."_".$var.".docx"; 
		if ($save_as==='') { 
		    // Output the result as a downloadable file (only streaming, no data saved in the server) 
		    $TBS->Show(OPENTBS_DOWNLOAD, $output_file_name); // Also merges all [onshow] automatic fields. 
		    // Be sure that no more output is done, otherwise the download file is corrupted with extra data. 
		    exit(); 
		} else { 
		    // Output the result as a file on the server. 
		    $TBS->Show(OPENTBS_DOWNLOAD, $output_file_name);
		    //$TBS->Show(OPENTBS_FILE, $output_file_name); // Also merges all [onshow] automatic fields. 
		    // The script can continue.

		    /*include_once('vendor/phpoffice/phpword/bootstrap.php');
		    $phpWord = new \PhpOffice\PhpWord\PhpWord();

			//Open template and save it as docx
			$document = $phpWord->loadTemplate($template);
			$document->saveAs('temp.docx');

			//Load temp file
			$phpWord = \PhpOffice\PhpWord\IOFactory::load('temp.docx'); 

			//Save it
			$xmlWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord , 'PDF');
			$xmlWriter->save('result.pdf'); */  
		    exit("File [$output_file_name] has been created."); 
		}
	}
}
