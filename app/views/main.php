<div class="container">

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
			
		</div>
	

	</div>
</div>

