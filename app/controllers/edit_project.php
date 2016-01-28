<?php

# edit_task.php

# 1. Logic


$projects = new Projects_Collection();
$projects->where(['deleted' => '0']);
$projects->where(['user_id' => AUTH::user_id()] );
$projects->get();

$project = new Project();
$project->load(['slug' => Route::param('slug')]);


if(Input::posted()){
	$project->fill(Input::all());
	$project->save();

	URL::redirect('/'.$project->slug);
}

Sticky::set('project_name', $project->project_name);
Sticky::set('project_description', $project->project_description);
Sticky::set('deadline', $project->deadline);

$title = 'Edit Project';

#2. Views

include VIEWS.'header.php';
include VIEWS.'new_project.php';
include VIEWS.'footer.php';



