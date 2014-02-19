<?php
session_start();
ob_start();
require_once("config/config.php");

require_once("models/database.php");
require_once("models/session.php");

require_once("api/contentFunctions.php");
require_once('api/mailFunctions.php');

require_once("business/Database_handler.class.php");
require_once("business/Link.class.php");
require_once("business/Error_handler.class.php");
require_once('business/Logger.class.php');
 
	ErrorHandler::SetHandler();
	
	$page = "";
	if(isset($_GET['page']))
	{
		$page = addslashes(htmlentites($_GET['page']));
	}
	
	if($page == 'login')
		require_once("models/login.php");
	else if($page == 'register')
		require_once("models/register.php");
	else
	{
	
	}
	
	//footer
flush();
ob_flush();
ob_end_clean();
	
?>