<?php

# archive.php

# 1. logic

AUTH::kickout('login');

$user = new User();
$user->load(AUTH::user());

$project = new Project();
$project->load( ['slug' => Route::param('slug')] );

$projects = new Projects_Collection();
$projects->where(['deleted' => '1']);
$projects->where(['user_id' => AUTH::user_id()] );
$projects->get();

$tasks = new Tasks_Collection();
$tasks->where(['deleted' => '0']);
$tasks->where(['user_id' => AUTH::user_id()] );
$tasks->where(['project_id' => $project->id]);

$tasks->order_by('progress', 'ASC');
$tasks->get();


# 2. views

include VIEWS.'header.php';
include VIEWS.'archive.php';
include VIEWS.'footer.php';