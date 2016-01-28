<?php

$task = new Task();

$task->load(Route::param('id'));

echo $task;