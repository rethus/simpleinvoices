<?php
// like i said, we must never forget to start the session

// is the one accessing this page logged in or not?
if (!isset($auth_session->id))
{
	if  ($_GET['module'] !== "auth")  
	{

		if ($_GET['location'] == 'pdf' ) {
			// not logged in, and coming from the pdf converter move to login page
			header('Location: ../index.php?module=auth&view=login');	
			exit;
		} 
		
		else if ($_GET['location'] !== 'pdf' ) {
				// not logged in, move to login page
				header('Location: index.php?module=auth&view=login');       
				exit;
			} 
		else {};
	}

}

?>
