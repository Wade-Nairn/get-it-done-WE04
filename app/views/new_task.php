<div class="container">
	
	

	<?= Form::open() ?>

	<h1><?= $title ?></h1>
	
	<div class="group">
		
		<?= Form::text('name', Sticky::get('name')) ?>
		<span class="highlight"></span><span class="bar"></span>
		<?= Form::label('name', 'Task Name') ?>
	</div>

	<div class="group">
		
		<?= Form::textarea('description', Sticky::get('description')) ?>
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