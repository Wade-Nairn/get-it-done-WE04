<?php

# edit_task.php

# 1. Logic
$task = new Task();
$task->load(Route::param('id'));

$project = new Project();
$project->load($task->project_id);

if(Input::posted()){
	$task->fill(Input::all());
	$task->save();

	URL::redirect('/'.$project->slug);
}
Sticky::set('name', $task->name);
Sticky::set('description', $task->description);


