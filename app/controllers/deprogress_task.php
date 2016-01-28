<?php

# deprogress.php

# 1. Logic

$project = new Project();
$project->load( ['slug' => Route::param('slug')] );

$task = new Task();
$task->load(Route::param('id'));
$task->progress = $task->progress - 1;
$task->save();



# 2.
URL::redirect('/'.$project->slug);