<?php
	require_once("action/CommonAction.php");
	require_once("action/dao/UserDAO.php");

	class IndexAction extends CommonAction {
	
		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
		}
		
		public function execute() {
			parent::execute();
			
			if (isset($_POST["username"]) && isset($_POST["password"])) {
				$user = UserDAO::authenticate($_POST["username"], $_POST["password"]);
			
				if ($user != null) {
					parent::setLoggedIn(true);
					header("Location:profile.php");
				}
				else {
					parent::setLoggedIn(false);
					parent::setResultMessage("Invalid authentication");
				}
			}
			else if (isset($_GET["action"]) && strcmp($_GET["action"], "logout") == 0) {
				parent::setLoggedIn(false);
			}
		}
	}