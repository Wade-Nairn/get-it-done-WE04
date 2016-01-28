<?php

# login.php

# 1. logic


if(Input::posted()){
	$user = new User();
	$user->fill( Input::all() );

	$success = $user->authenticate();

	if($success){
		Auth::log_in($user->id);
		URL::redirect('home');
	}
}	

# 2. views

include VIEWS.'header.php';
include VIEWS.'login.php';
include VIEWS.'footer.php';