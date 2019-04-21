<?php

	class DBController {

	    private $user   = "root";
	    private $host   = "localhost";
	    private $pass   = "";
	    private $db     = "php_ajax_db";

	    public function __construct()
	    {
	        
	    }
	   
	    public function connect()
	    {	
	        $conn = new mysqli($this->host, $this->user, $this->pass, $this->db) or die("Database error: %s\n". $conn->error);
	        return $conn;
	    }

	    public function close($conn)
		{
			$conn->close();
		}
	}

