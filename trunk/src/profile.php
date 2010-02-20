<?php
	require_once("action/ProfileAction.php");

	$action = new ProfileAction();
	$action->execute();
	
	include("header.php");
?>
	<h1>Profile page is here... And it's private !</h1>
<?php
	include("footer.php");
?>