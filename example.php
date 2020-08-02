	$websiteURL =  URL_HERE;
	$api_response = file_get_contents("https://www.googleapis.com/pagespeedonline/v5/runPagespeed?url=$websiteURL&screenshot=true");
  
  //decode json data
	$result = json_decode($api_response, true);

	//screenshot data
	$screenshot = $result['lighthouseResult']['audits']['final-screenshot']['details']['data'];
  //suppression en tete fichier et reformatage
	$screenshot = substr($screenshot, 23);
	$screenshot = str_replace(array('_','-'),array('/','+'),$screenshot); 

	//display screenshot image
	//echo ("<img src=\"data:image/jpeg;base64,".$screenshot."\" />");
