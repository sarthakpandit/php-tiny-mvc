<?php
	session_start();

	class CommonAction {
		public static $VISIBILITY_PUBLIC = 0;
		public static $VISIBILITY_PRIVATE = 1;
		private $visibilty;
		private $resultMessage;
	
		public function __construct($visibilty) {
			$this->visibilty = $visibilty;
		}
		
		public function execute() {
			if ($this->visibilty == CommonAction::$VISIBILITY_PRIVATE &&
				!$this->isLoggedIn()) {
					
				header("Location:index.php");
			}
		}
	
		public function isLoggedIn() {
			$loggedIn = false;
			
			if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]) {
				$loggedIn = true;				
			}
			
			return $loggedIn;
		}
		
		public function getUser() {
			return $_SESSION["user"];
		}
		
		protected function setLoggedIn($loggedIn, $user = null) {
			if ($loggedIn) {
				$_SESSION["loggedIn"] = true;
				
				if ($user != null) {
					$_SESSION["user"] = $user;
				}
			}
			else {
				unset($_SESSION["loggedIn"]);
				session_destroy();
			}
		}
	
		public function getResultMessage() {
			return $this->resultMessage;
		}
		
		protected function setResultMessage($msg) {
			$this->resultMessage = $msg;
		}
	}


