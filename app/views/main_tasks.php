<div class="container flex-1">

	<div class="flex flex-row "> <!-- flex-box start -->
		
		<div class="flex-1 sidebar flex-a-end">

			<ul>	
				<li class="sidebar-list">
					<a href="/new_project" class="btn btn-success" role="button"><span class=" glyphicon glyphicon-plus-sign" aria-hidden="true"></span> new project</a>
				</li>	
				<li>
					<? foreach ($projects->items as $nav_project ): ?>
						<a href="/<?= $nav_project->slug ?>" ><h2 class="sidebar-list"><?= $nav_project->project_name ?></h2></a>
					<? endforeach ?>
				</li>
			</ul>

		</div>

			

		<div class="flex flex-column flex-4"> <!-- project section start -->

				<div class="project-details flex flex-row flex-j-between">

					<div class="flex flex-column">
						<span class="flex-4 subnav-box"><h1><?= $project->project_name ?></h1></span>
						<a href="<?= $project->slug ?>/new_task" class="btn btn-success openmodal" role="button">
							<span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> new task</a>
					</div>

					<span class="flex-8 subnav-box flex flex-column flex-j-between">
						<p><?= $project->project_description ?></p>
						<p class="total-hours"><?= $tasks_total ?> total hours</p>
					</span>
					
					<div class="flex flex-3 flex-column subnav-box countdown" data-due="<?= $project->deadline ?>">
						<span class="countdown-text">DUE IN</span>
						<div class="flex flex-row flex-j-center" id="countdown" >
							<div class="days"><span></span>:</div>
							<div class="hours"><span></span>:</div>
							<div class="mins"><span></span></div>
						</div>
						

						<span class="countdown-text">days : hour : min</span>
					</div>	

					<div class="flex flex-3 flex-column flex-j-center flex-a-center">
						<a href="<?= $project->slug ?>/delete_project" role="button" class="btn btn-danger" >
							<span class="glyphicon glyphicon-trash" aria-hidden="true"></span> project</a>
						<a href="<?= $project->slug ?>/edit_project" role="button" class="btn btn-warning">
							<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> project</a>
					</div>
					
				</div>



				<div class="flex flex-row columns"> <!-- columns start -->

					<div class="flex-1 task-column">
						<h3 class="task-box">Ideas</h3>
							<? foreach ($tasks->items as $task ): ?>
							<? if($task->progress == 0): ?>
							<div class="task-box toggle">
								<p class="task-name"><?= $task->name ?></p>
								<div class="slide hide">
									<hr>
									<p><?= $task->description ?></p>
									<hr>
									<div class="flex flex-row flex-j-end flex-a-center">
										<span class="time-display"><?= $task->timeframe ?> hours</span>
										<a href="/<?= $project->slug ?>/task/<?= $task->id ?>/delete"><span class=" btn btn-danger glyphicon glyphicon-trash" aria-hidden="true"></span></a>
										<a class="openmodal" href="/<?= $project->slug ?>/task/<?= $task->id ?>/edit" data-task-id="<?= $task->id ?>"><span class="btn btn-warning glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
										<a href="/<?= $project->slug ?>/task/<?= $task->id ?>/forward"><span class="btn btn-success glyphicon glyphicon-menu-right" aria-hidden="true"></span></a>
									</div>
								</div>
							</div>	
							<? endif; ?>
							<? endforeach ?>
					</div>
				
					<div class="flex-1 task-column">
						<h3 class="task-box">To Do</h3>
							<? foreach ($tasks->items as $task ): ?>
							<? if($task->progress == 1): ?>
							<div class="task-box toggle">
								<p class="task-name"><?= $task->name ?></p>
								<div class="slide hide">
									<hr>
									<p><?= $task->description ?></p>
									<hr>
									<div class="flex flex-row flex-j-end flex-a-center">
									<span class="time-display"><?= $task->timeframe ?> hours</span>
										<a href="/<?= $project->slug ?>/task/<?= $task->id ?>/back"><span class="btn btn-success glyphicon glyphicon-menu-left" aria-hidden="true"></span></a>
										<a href="/<?= $project->slug ?>/task/<?= $task->id ?>/delete"><span class="btn btn-danger glyphicon glyphicon-trash" aria-hidden="true"></span></a>
										<a href="/<?= $project->slug ?>/task/<?= $task->id ?>/edit" class="openmodal" data-task-id="<?= $task->id ?>"><span class="btn btn-warning glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
										<a href="<?= $project->slug ?>/task/<?= $task->id ?>/forward"><span class="btn btn-success glyphicon glyphicon-menu-right" aria-hidden="true"></span></a>
									</div>
								</div>
							</div>	
							<? endif; ?>
							<? endforeach ?>
					</div>
				
					<div class="flex-1 task-column">
						<h3 class="task-box">Doing</h3>
							<? foreach ($tasks->items as $task ): ?>
							<? if($task->progress == 2): ?>
							<div class="task-box toggle">
								<p class="task-name"><?= $task->name ?></p>
								<div class="slide hide">
									<hr>
									<p><?= $task->description ?></p>
									<hr>
									<div class="flex flex-row flex-j-end flex-a-center">
									<span class="time-display"><?= $task->timeframe ?> hours</span>
										<a href="/<?= $project->slug ?>/task/<?= $task->id ?>/back"><span class="btn btn-success glyphicon glyphicon-menu-left" aria-hidden="true"></span></a>
										<a href="/<?= $project->slug ?>/task/<?= $task->id ?>/delete"><span class="btn btn-danger glyphicon glyphicon-trash" aria-hidden="true"></span></a>
										<a href="/<?= $project->slug ?>/task/<?= $task->id ?>/edit" class="openmodal" data-task-id="<?= $task->id ?>"><span class="btn btn-warning glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
										<a href="<?= $project->slug ?>/task/<?= $task->id ?>/forward"><span class="btn btn-success glyphicon glyphicon-menu-right" aria-hidden="true"></span></a>
									</div>
								</div>
							</div>
							<? endif; ?>
							<? endforeach ?>
					</div>
				
					<div class="flex-1 task-column">
						<h3 class="task-box">Done!</h3>
							<? foreach ($tasks->items as $task ): ?>
							<? if($task->progress == 3): ?>
							<div class="task-box toggle">
								<p class="task-name"><?= $task->name ?></p>
								<div class="slide hide">
									<hr>
									<p><?= $task->description ?></p>
									<hr>
									<div class="flex flex-row flex-j-end flex-a-center">
										<a href="/<?= $project->slug ?>/task/<?= $task->id ?>/back"><span class="btn btn-success glyphicon glyphicon-menu-left" aria-hidden="true"></span></a>
										<a href="/<?= $project->slug ?>/task/<?= $task->id ?>/delete"><span class="btn btn-danger glyphicon glyphicon-trash" aria-hidden="true"></span></a>
										<a href="/<?= $project->slug ?>/task/<?= $task->id ?>/edit" class="openmodal" data-task-id="<?= $task->id ?>"><span class="btn btn-warning glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
									</div>
								</div>
							</div>
							<? endif; ?>
							<? endforeach ?>
					</div>

			</div> <!-- columns end -->
		</div> <!-- project section end -->
	</div> <!-- flex-box end -->
</div> <!-- container -->


<!-- task modal -->
<div class="hide">
<div id="dialog" class="dialog">
	
	<?= Form::open() ?>

	<h1></h1>
	
	<div class="group">
		<?= Form::text('name') ?>
		<span class="highlight"></span><span class="bar"></span>
		<?= Form::label('name', 'Task Name') ?>
	</div>

	<div class="group">
		<?= Form::textarea('description') ?>
		<span class="highlight"></span><span class="bar"></span>
		<?= Form::label('description', 'Task Description') ?>
	</div>

	<div class="group">
		<?= Form::text('timeframe' ) ?>
		<span class="highlight"></span><span class="bar"></span>
		<?= Form::label('timeframe', 'How long will it take? (hours)') ?>
	</div>

	<?= Form::submit('Save', ['class' => 'button buttonBlue']) ?>

	<?= Form::close() ?>

</div>
</div>
<!-- end of task modal -->

	
	

