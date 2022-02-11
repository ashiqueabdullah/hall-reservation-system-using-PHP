<?php
   include_once 'database.php';
   include_once 'session.php';
   
   
   /**
    * 
    */
   class phpclass
   {
     	private $db;
     	function __construct()
     	{
     		$this->db = new Database();
     	}


  ?>