<?php


//var_dump($parametros[10]);

	//$_FILES["fileToUpload"]["tmp_name"];


	if(isset($_FILES['miarchivo']['name']) && $_POST['ruta']){

		$imgOriginal=$_FILES['miarchivo']['name'];
		$rutaf = $_POST['ruta'];

		if($imgOriginal){

			$temporal = $_FILES["miarchivo"]["tmp_name"];
			$urlDef = $rutaf."/";
			$guarda = move_uploaded_file($temporal, $urlDef.$imgOriginal);//$guarda true si guardo la factura en la carpeta recien creada

			if(file_exists($temporal))
			{
			   echo "El archivo ha sido cargadao al servidor";
			}
			else
			{
			   echo "El archivo no se ha cargado al servidor";

			}



				if ($guarda) { //si guarda la imagen en la carpeta
					
					echo "Archivo subido";

				}else{// si no gurado la imagen en la carpeta
					echo "Paila candonga Arete, no subio nada";

				}

		}	
	}	
