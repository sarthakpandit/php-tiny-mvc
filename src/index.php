<?php

	require_once("action/IndexAction.php");

	$action = new IndexAction();
	$action->execute();
	
	require_once("header.php");
?>
	<h1>Home page</h1>
	
	<?php
		if ($action->getResultMessage() != null) {
			?>
			<h2><?php echo $action->getResultMessage(); ?></h2>
			<?php
		}
	?>
	
	<?php 
		if (!$action->isLoggedIn()) {
			?>
			<form action="index.php" method="post">
				<input type="text" name="username" />
				<input type="password" name="password" />
				<input type="submit" value="Sign in" />
			</form>
			<?php
		} 
	?>
<?php
	include("footer.php");
?>