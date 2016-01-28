<?php

# new_project.php

# 1. logic
AUTH::kickout('login');

$projects = new Projects_Collection();
$projects->where(['deleted' => '0']);
$projects->where(['user_id' => AUTH::user_id()] );
$projects->get();

if(Input::posted()){
	
	$slug = Input::get('project_name');
	$slug = strtolower($slug);
	$slug = explode(" ", $slug);
	$slug = implode("-", $slug);

	$deadline = Input::get('deadline');
	$deadline = intval($deadline);

	$project = new project();

	$project->fill(Input::all());
	$project->date = date('Y-m-d H:i:s');
	$project->slug = $slug;
	$project->user_id = Auth::user_id();
	if(Input::get('project_name')!= "" || Input::get('project_description')!= ""){
		$project->save();
		URL::redirect('/'.$project->slug);
	}
	URL::redirect('/new_project');
	
}
$title = 'New Project';

# 2. views

include VIEWS.'header.php';
include VIEWS.'new_project.php';
include VIEWS.'footer.php';









