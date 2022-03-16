<?php 


	//$user = "epiz_31134414";
	//$pass = "opWQ7WceuI";
	//$database = "epiz_31134414_sanchezweb3";

	$user = "root";
	$pass = "";
	$database = "registro";
    $options = array(
               PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES 'utf8mb4'",
               PDO::ATTR_DEFAULT_FETCH_MODE=>PDO_OBJ);

    try {
    	 
    	 $dsn = "mysql:host=localhost;dbname=$database";
    	 $dbh = new PDO($dsn,$user,$pass,$options);
    } catch (Exception $e) {
    	echo $e.getMessaage();
    }











	//try {

		//$db = new PDO("mysql:host=localhost;
			//dbname=".$database,$user,$pass);
		
	//} catch (Exception $e) {

		//echo "Error".$e->getMessage();
		
	//}
 ?>