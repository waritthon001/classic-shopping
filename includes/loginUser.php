<?php
$username = "";
$email    = "";
$errors = array(); 


if (isset($_POST['login_btn'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	if (empty($username)) { array_push($errors, "Username required"); }
	if (empty($password)) { array_push($errors, "Password required"); }
	if (empty($errors)) {
		$password = md5($password); // encrypt password
		$sql = "SELECT * FROM users WHERE username='$username' and password='$password' LIMIT 1";

		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
			// get id of created user
			$reg_user_id = mysqli_fetch_assoc($result)['id']; 

			// put logged in user into session array
			$_SESSION['user'] = getUserById($reg_user_id); 

			// if user is admin, redirect to admin area
			if ( in_array($_SESSION['user']['role'], [ "Sales Rep","President"])) {
				$_SESSION['message'] = "You are now logged in";
				// redirect to admin area
				header('location: ' . BASE_URL . '/admin/dashboard2.php');
				exit(0);
			}elseif(in_array($_SESSION['user']['role'], [ "Sales Manager (NA)","Sale Manager (EMEA)","Sales Manager (APAC)","VP Marketing","VP Sales"])){
				$_SESSION['message'] = "You are now logged in";
				// redirect to admin area
				header('location: ' . BASE_URL . '/admin/dashboard.php');
				exit(0);
			
			} else {
				$_SESSION['message'] = "You are now logged in";
				// redirect to public area
				header('location: index2.php');				
				exit(0);
			}
		} else {
			array_push($errors, 'Wrong credentials');
		}
	}
}

?>