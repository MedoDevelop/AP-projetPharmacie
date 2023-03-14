<?php 

	function connexionPDO() {
	    $login = "root";
		$mdp = "";
		$db= "pharmacie";
		$serveur = "localhost";

	    try {
	        $conn = new PDO("mysql:host=$serveur;dbname=$db;port=3306",$login, $mdp, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'')); 
	        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	        return $conn;
	    } catch (PDOException $e) {
	        echo $e->getMessage();
	        die();
	    }
	}

	if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
	    // prog de test
	    header('Content-Type:text/plain');

	    echo "connexionPDO() : \n";
	    print_r(connexionPDO());
	}
?>