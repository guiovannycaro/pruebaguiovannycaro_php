<?php
class controldb{
	
		var $dbtype = "mysqli";
	var $dbhost = "localhost";
	var $dbuser = "root";
	var $dbpass = "";
	var $dbname = "bdpruebaguiovannycaro";
	
	var $response;
	var $link;
	var $conn;

function connect(){
	
$this->response = "";
		// +-----------------------------------------+
		// | Configurar los motores de BD soportados |
		// +-----------------------------------------+
		if ($this->dbtype == "mysqli" ) {
			$this->con = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass);
			$this->conn = mysqli_select_db($this->con,$this->dbname);
		}

/*		if(!$this->link || (isset($this->conn) && !$this->conn))	{
			$this->response = "Fall la conexion !!";
			echo "<br>Fall la conexion !!";
		}
		else	{
			$this->response = "Conexion exitosa";
			echo "<br>Conexion exitosa";
		}*/	
	
}

	function query($sql)	{
		if (@$this->dbtype == "mysqli" ) {
            //echo "<li>" . $sql;
			return mysqli_query($this->con,$sql);

		}
	}

	function fetch_row($result)	{
		if (@$this->dbtype == "mysqli" ) {
		    return @mysqli_fetch_array($result);
		}
	}

}

?>