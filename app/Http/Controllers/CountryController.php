<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;

class CountryController extends Controller
{
    //
	public function index(){

    	// Make table body with Country Name and Code
		$table = '';  
		foreach($this->getListSeparated() as $country) {
			$country = explode(",", $country); 
			//$country[0] = Country Code | $country[1] = Country Name 
			$table .= '<tr>
			<td>'.$country[1].'</td> 
			<td>'.$country[0].'</td> 
		</tr>';
	}

	return view('welcome',['countries' => $table]);
}

public function exportCsvList(){

    // Make the list with Country Name and Code
	foreach($this->getListSeparated() as $country) {
		$country = explode(",", $country);
		$collectionCountries[$country[1]] = $country[0];       
	}

	//Order by Name
	ksort($collectionCountries);

	$filename = "countries.csv";
	$handle = fopen($filename, 'w+');
	fputcsv($handle, array('Country Name', 'Country Code'));

    // Make the list with Country Name and Code to export as CSV file
	foreach($collectionCountries as $cName => $cCode) {
		fputcsv($handle, array($cName, $cCode));
	}

	fclose($handle);
	$headers = array(
		'Content-Type' => 'text/csv',
		);

	return Response::download($filename, 'countries.csv', $headers);
}	

public function getListSeparated(){
	$path = storage_path() . "/app/json/countries"; 
	$handler = fopen($path, "r") or die("Não foi possível encontrar o Arquivo!");
	$content = fread($handler, filesize($path));        
	fclose($handler);

	   	// Separate data rows to array
	$countriesList = explode("\n", $content);

	return $countriesList;
}
}
