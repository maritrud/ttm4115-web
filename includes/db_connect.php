<?php

	class MyDB extends SQLite3
	   {
	      function __construct()
	      {
	         $this->open('/var/www/db/database.db');
	      }
	   }
	   $db = new MyDB();
	   if(!$db){
	      echo $db->lastErrorMsg();
	   }