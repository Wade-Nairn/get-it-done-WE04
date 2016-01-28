<?php

# main_tasks.php

# 1. logic

AUTH::kickout('login');

$project = new Project();
$project->load( ['slug' => Route::param('slug')] );


$projects = new Projects_Collection();
$projects->where(['deleted' => '0']);
$projects->where(['user_id' => AUTH::user_id()] );
$projects->get();

$tasks = new Tasks_Collection();
$tasks->where(['deleted' => '0']);
$tasks->where(['project_id' => $project->id]);
$tasks->order_by('progress', 'ASC');
$tasks->get();


$tasks_total = 0;
foreach($tasks->items as $task){
	if($task->progress == 3) continue;
	$tasks_total += $task->timeframe;

}


if(Input::posted()){
	$task = new Task();
	$task->fill(Input::all());
	$task->user_id = Auth::user_id();
	$task->project_id = $project->id;
	
	if(Input::get('name')!= "" || Input::get('description')!= ""){
		$task->save();
	}
	URL::redirect('/'.$project->slug);
}

Sticky::set('name', $task->name);
Sticky::set('description', $task->description);

# 2. views

include VIEWS.'header.php';
include VIEWS.'main_tasks.php';
include VIEWS.'footer.php';