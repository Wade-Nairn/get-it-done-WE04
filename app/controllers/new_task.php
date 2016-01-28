<?php
# new_task.php

# 1. logic

$project = new Project();
$project->load( ['slug' => Route::param('slug')] );

if(Input::posted()){
	$task = new Task();
	$task->fill(Input::all());
	$task->user_id = Auth::user_id();
	$task->project_id = $project->id;
	if(Input::get('name')!= "" || Input::get('description')!= ""){
		$task->save();
	}

	
}
URL::redirect('/'.$project->slug);