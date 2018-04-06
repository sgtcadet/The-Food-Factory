<?php
/*** Session start***/
session_start();




/*** Check if both username, password and form token have been sent***/
if(!isset($_POST['fdf_username'], $_POST['fdf_password'], $_POST['form_token']))
{
	$message = 'Please enter a valid username and password';
}
/*** check if form token is valid ***/
elseif($_POST['form_token'] != $_SESSION['form_token'])
{
	$message = 'Invalid form submission';
}
/*** check username length ***/
elseif( strlen($_POST['fdf_username']) > 20 || strlen($_POST['fdf_username'] > 4))
{
	$message = 'Incorrect length for username';
}
/*** check password length***/
elseif( strlen($_POST['fdf_password']) > 40 || strlen($_POST['fdf_password']) < 4)
{
	$message = 'Incorrect length for password';
}
/*** check the username has only alpha numeric characters ***/
elseif(ctype_alnum($_POST['fdf_username']) != true)
{
	/***If there is no match***/
	$message = 'Username must be alpha numeric';
}
/*** check the password has only alpha numeric characters ***/
elseif(ctype_alnum($_POST['fdf_password']) != true)
{
	/*** if there is no match***/
	$message = 'Password must be alpha numeric';
}
else
{
	/*** data is valid and we can insert it into database ***/
	$fdf_username = filter_var($_POST['fdf_username'], FILTER_SANITIZE_STRING);
	$fdf_password = filter_var($_POST['fdf_password'], FILTER_SANITIZE_STRING);


	/*** Encrypt password***/
	$fdf_password = sha1($fdf_password);
}
?>

<?php
	define("TITLE", "The Food Factory|Login");
	include('includes/header.php');
?>
	

	<p><?php echo $message;?></p>


<?php
	
	include('includes/footer.php');
?>