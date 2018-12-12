function add_new_admin(){
	$username = 'username';
	$password = 'password';
	$email = 'email@example.com';
	if (!username_exists($username) && !email_exists($email)){ // Checking if username or email already there 
		$user_id = wp_create_user($username, $password, $email); // Creating New user
		$user = new WP_User($user_id); 
		$user->set_role('administrator'); // Assigning admin role to new user
	}
}
add_action('init','add_new_admin'); //adding hook
