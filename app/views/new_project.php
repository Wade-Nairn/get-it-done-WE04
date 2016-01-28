<div class="container flex-1">

	<div class="flex flex-row ">

			<div class="flex-1 sidebar flex-a-end">

				<ul>	
					<li class="sidebar-list">
						<a href="/new_project" class="btn btn-success openmodal2" role="button"><span class=" glyphicon glyphicon-plus-sign" aria-hidden="true"></span>Project</a>
					</li>	
					<li>

						<? foreach ($projects->items as $nav_project ): ?>
							<a href="/<?= $nav_project->slug ?>" ><h2 class="sidebar-list"><?= $nav_project->project_name ?></h2></a>

						<? endforeach ?>
					</li>
				</ul>

			</div>


		
		<div class="flex-3">

			<?= Form::open() ?>

				<h1><?= $title ?></h1>

				<div class="group">
					
					<?= Form::text('project_name', Sticky::get('project_name')) ?>
					<span class="highlight"></span><span class="bar"></span>
					<?= Form::label('project_name', 'Project Name') ?>
				</div>

				<div class="group">
					
					<?= Form::textarea('project_description', Sticky::get('project_description')) ?>
					<span class="highlight"></span><span class="bar"></span>
					<?= Form::label('project_description', 'Project Description') ?>
				</div>

				<div class="group">
	                <div class='input-group date' id='datetimepicker1'>
	                    <!-- <input type='text' class="" name='deadline'  id='deadline' /> -->
	                    <?= Form::text('deadline', Sticky::get('deadline')) ?>
	                    <span class="highlight"></span><span class="bar"></span>
	                    <?= Form::label('deadline', 'Due On') ?>

	                    <span class="input-group-addon">
	                        <span class="glyphicon glyphicon-calendar"></span>
	                    </span>

	                </div>
	            </div>

				<?= Form::submit('Save', ['class' => 'button buttonBlue']) ?>

			<?= Form::close() ?>
		</div>

	</div>

</div>