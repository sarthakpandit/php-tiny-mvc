<?php

	class UserDAO {
	
		public static function authenticate($username, $password) {
			$result = null;
			
			// db, xml, ...
			if (strcmp($username, "lorem") == 0 && strcmp($password, "ipsum") == 0) {
				$user = array();
				$user["username"] = "Jsmith";
				$user["firstName"] = "John";
				$user["lastName"] = "Smith";
				$result = $user;
			}
			
			return $result;
		}
	}