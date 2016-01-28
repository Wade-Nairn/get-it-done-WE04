 <?php

# delete_task.php

# 1. logic
AUTH::kickout('login');

$project = new Project();
$project->load( ['slug' => Route::param('slug')] );

$task = new Task();
$task->load(Route::param('id'));

$task->delete(); 

# 2. views

URL::redirect('/'.$project->slug);






