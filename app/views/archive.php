<div class="container">

	

	<div class="flex flex-row ">
		<div class="flex-1 sidebar flex-a-end">

			<ul>
				<li>

					<? foreach ($projects->items as $nav_project ): ?>
						<a href="/archive/<?= $nav_project->slug ?>" ><h2 class="sidebar-list"><?= $nav_project->project_name ?></h2></a>

					<? endforeach ?>
				</li>
			</ul>

			</div>

			

		<div class="flex flex-column flex-4">

				<div class="project-details flex flex-row flex-j-between">
					<span class="flex-2 task-box"><h1><?= $project->project_name ?></h1></span>
					<span class="flex-4 task-box"><p><?= $project->project_description ?></p></span>

					
				</div>

				<div class="flex flex-row">

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
										
									</div>
								</div>
							</div>
							<? endif; ?>
							<? endforeach ?>
					</div>
				



		</div>

		

	</div>

</div>