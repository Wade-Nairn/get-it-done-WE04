
<?php

# register.php

# 1. logic

if(Input::posted()){

	$user = new User();
	$user->fill( Input::all() );
	
	$user->password = password_hash($user->password, PASSWORD_DEFAULT);

	$user->save();

	Auth::log_in($user->id);
	URL::redirect('home');


}

# 2. views

include VIEWS.'header.php';
include VIEWS.'register.php';
include VIEWS.'footer.php';