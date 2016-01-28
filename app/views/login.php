<div class="container">
		

		<?= Form::open() ?>
		
			
		<ul class="flex flex-row">
			<li class="button buttonBlue">Login</li>
			<li class="buttonNormal"><a href="/register" class="">Register</a></li>
		</ul>
		
		<hr>

		

		<div class="group">
			<?= Form::text('username', Sticky::get('username')) ?>
			<span class="highlight"></span><span class="bar"></span>
			<?= Form::label('username', 'Username') ?>
		</div>

		<div class="group">
			<?= Form::password('password') ?>
			<span class="highlight"></span><span class="bar"></span>
			<?= Form::label('password', 'Password') ?>
		</div>
		
		<?= Form::submit('Login', ['class' => 'button buttonBlue']) ?>

		

			<?= Form::close() ?>

</div>