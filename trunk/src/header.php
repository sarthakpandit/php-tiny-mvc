<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1"/>
        <title>My Website</title>
    </head>
    <body>
		<div>
			<ul>
				<li style="display:inline"><a href="index.php">Home</a></li> 
		
				<?php
					if ($action->isLoggedIn()) {
					?>
						<li style="display:inline"><a href="profile.php">Profile</a></li>
						<li style="display:inline"><a href="index.php?action=logout">Logout</a></li>
					<?php
					}
				?>
			</ul>
			<hr/>
		</div>
		<div>
			