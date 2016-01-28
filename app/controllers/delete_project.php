<?php

# delete_task.php

# 1. logic

Auth::kickout('login');

$project = new Project();
$project->load( ['slug' => Route::param('slug')] );

$project->delete();

# 2. views

URL::redirect('/home');


