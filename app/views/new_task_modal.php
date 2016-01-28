
<div id="dialog" >
	<h1><?= $title ?></h1>

	<?= Form::open() ?>
	
	<div class="form-group">
		<?= Form::label('name', 'Task Name') ?>
		<?= Form::text('name', Sticky::get('name'), ['class' => 'form-control']) ?>
	</div>

	<div class="form-group">
		<?= Form::label('description', 'Task Description') ?>
		<?= Form::textarea('description', Sticky::get('description'), ['class' => 'form-control']) ?>
	</div>

	<div class="form-group">

        	<label for="deadline">Deadline</label>
            <div id="datetimepicker12"></div>
       
	</div>

	<?= Form::submit('Save', ['class' => 'btn btn-primary']) ?>

	<?= Form::close() ?>

</div>

