<?php

header('Content-Type: application/json');

//Tyhjät parametrit.  
if (count($_GET) == 0) 
{
	$data = "data.json";
    $json = file_get_contents($data);

	$jsondata = json_decode($json);
	$jsdatsum = count($jsondata);

	echo json_encode($jsondata, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
}

//Haut yhdellä parametrilla
if (count($_GET) == 1) 
{

	//Haku kategorian mukaan.
	if (isset($_GET["Category"])) 
	{
		$data = "data.json";
	    $json = file_get_contents($data);

		$jsondata = json_decode($json);
		$jsdatsum = count($jsondata);

		for ($i=0; $i < $jsdatsum; $i++) 
		{ 
			if ($_GET["Category"] == $jsondata[$i]->Category) 
			{
				echo json_encode($jsondata[$i], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES| JSON_PRETTY_PRINT);
			}
		}
	}

	//Haku Id:n mukaan.
	if (isset($_GET["Id"])) 
	{
		$data = "data.json";
	    $json = file_get_contents($data);

		$jsondata = json_decode($json);
		$jsdatsum = count($jsondata);

		for ($i=0; $i < $jsdatsum; $i++) 
		{ 
			if ($_GET["Id"] == $jsondata[$i]->Id) 
			{
				echo json_encode($jsondata[$i], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
			}
		}
	}

	//Haku hinnan mukaan.
	if (isset($_GET["Price"])) 
	{
		$data = "data.json";
	    $json = file_get_contents($data);

		$jsondata = json_decode($json);
		$jsdatsum = count($jsondata);

		for ($i=0; $i < $jsdatsum; $i++) 
		{ 
			if ($jsondata[$i]->Price < $_GET["Price"]) 
			{
				echo json_encode($jsondata[$i], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
			}
		}
	}
}

//Haku kahdella parametrilla.
if (count($_GET) == 2) 
{
	//Haku X:n ja hinnan mukaan. 
	if ( (isset($_GET["Id"]) xor isset($_GET["Category"]) xor isset($_GET["Name"])) && isset($_GET["Price"]) ) 
	{

	 	$data = "data.json";
	    $json = file_get_contents($data);

		$jsondata = json_decode($json);
		$jsdatsum = count($jsondata);

		//Haku id ja hinnan mukaan.
		if (isset($_GET["Id"])) 
		{
			for ($i=0; $i < $jsdatsum; $i++) 
			{ 
				if ($jsondata[$i]->Price < $_GET["Price"] && $jsondata[$i]->Id == $_GET["Id"] ) 
				{
					echo json_encode($jsondata[$i], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
				}
			}
		}

		//Haku kategorian ja hinnan mukaan. 
		if (isset($_GET["Category"])) 
		{
			for ($i=0; $i < $jsdatsum; $i++) 
			{ 
				if ($jsondata[$i]->Price < $_GET["Price"] && $jsondata[$i]->Category == $_GET["Category"] ) 
				{
					echo json_encode($jsondata[$i], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
				}
			}
		}

		//Haku Nimen ja hinnan mukaan. 
		if (isset($_GET["Name"])) 
		{
			for ($i=0; $i < $jsdatsum; $i++) 
			{ 
				if ($jsondata[$i]->Price < $_GET["Price"] && $jsondata[$i]->Name == $_GET["Name"] ) 
				{
					echo json_encode($jsondata[$i], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
				}
			}
		}
	}

	//Haku X:n ja kategorian mukaan.
	if ( (isset($_GET["Id"]) xor isset($_GET["Name"])) &&  isset($_GET["Category"]))
	{
	 	$data = "data.json";
	    $json = file_get_contents($data);

		$jsondata = json_decode($json);
		$jsdatsum = count($jsondata);

		//Haku Id:n ja kategorian mukaan.
		if (isset($_GET["Id"])) 
		{
			for ($i=0; $i < $jsdatsum; $i++) 
			{ 
				if ($jsondata[$i]->Id == $_GET["Id"] && $jsondata[$i]->Category == $_GET["Category"] ) 
				{
					echo json_encode($jsondata[$i], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
				}
			}
		}

		//Haku nimen ja kategorian mukaan.
		if (isset($_GET["Name"])) 
		{
			for ($i=0; $i < $jsdatsum; $i++) 
			{ 
				if ($jsondata[$i]->Name == $_GET["Name"] && $jsondata[$i]->Category == $_GET["Category"] ) 
				{
					echo json_encode($jsondata[$i], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
				}
			}
		}
	}  
}

?>
