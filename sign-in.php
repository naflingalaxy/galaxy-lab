<?php
include 'top.php';
include 'includes/auth.php';
include_once DOC_ROOT.'classes/db_connection.php';

if (isset($_POST['signin-btn'])) {
	$username = filter_var($_POST['user_name'], FILTER_SANITIZE_STRING);
	$userpassword = filter_var($_POST['user_password'], FILTER_SANITIZE_STRING);
	$md5password = md5($userpassword);
	$userstatus = '1';

	$user_login = array('userid' => $username, 'md5password' => $md5password, 'userstatus' => $userstatus);
    $user_login_query = $db->query("SELECT * FROM tbl_galaxy_users WHERE user_id = :userid AND user_password = :md5password AND user_status = :userstatus", $user_login);

	if ($user_login_query) {
        for ($i=0; $i < count($user_login_query); $i++) { 
            $_SESSION['user_id'] = $user_login_query[$i]['user_id'];
            $_SESSION['user_name'] = $user_login_query[$i]['user_name'];
            $_SESSION['user_type'] = $user_login_query[$i]['user_type'];
            $_SESSION['user_status'] = $user_login_query[$i]['user_status'];
            $_SESSION['user_full_name'] = $user_login_query[$i]['user_full_name'];
            $_SESSION['user_image'] = $user_login_query[$i]['user_image'];
        }
		header("Location:".HTTP_PATH."index");
	}
    else {
    	$errorMessage = "Username or password incorrect.!";
		setcookie("cookieErrorMessage", $errorMessage, time() + (20 * 1), "/"); // 1 minute
		header("Location:".HTTP_PATH."sign-in");
		
		
	}

}



$include_file = DOC_ROOT.'pages/sign_in_page.php';
include DOC_ROOT.'template.php';
?>