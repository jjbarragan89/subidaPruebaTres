<?php

	if(isset($_POST['nomca'])){
		$nombreca =$_POST['nomca'];
		recibenombre($nombreca);
	}

	
	//$dir=$this->crearCarpeta($parametros[0]); 

	function recibenombre($nombreca){

		$destino=$_SERVER['DOCUMENT_ROOT'].dirname($_SERVER['REQUEST_URI'])."subidaPruebaTres/".$nombreca;
		echo $_SERVER['DOCUMENT_ROOT']."server root <br>";
		echo $_SERVER['REQUEST_URI']." uri <br>";
		$directorio=array();
		//var_dump($destino);
		//echo getcwd();
		$dir = mkdir($destino,'0777');

		if($dir){
			echo "Carpeta creada";
		}

		$directorio[0]=$dir;
		$directorio[1]= $destino;
		//return $directorio;

		?>
			<!DOCTYPE HTML>
			    <HEAD>
			        <TITLE>Crear carpeta</TITLE>
			    </HEAD>

			    <BODY>
			    	<form action="crearchivo.php" method="post" enctype="multipart/form-data">
				    	<input type="file" name="miarchivo">
				    	<input type="hidden" name="ruta" value="<?php echo $directorio[1];  ?>">
				    	<input type="submit" value="Subir archivo a carpeta">
				    </form>	
			    </BODY>
			</HTML>

		<?php

	}	


?>





	

	