<div class="container">
	

	<?= Form::open() ?>
			<ul class="flex flex-row">
				<li class="button buttonBlue">Register</li>
				<li class="buttonNormal"><a href="/login">Login</a></li>
			</ul>
		<hr>

		

		<div class="group">
			
			<?= Form::text('username', Sticky::get('username')) ?>
			<span class="highlight"></span><span class="bar"></span>
			<?= Form::label('username', 'Username') ?>
		</div>

		<div class="group">
			
			<?= Form::email('email', Sticky::get('email')) ?>
			<span class="highlight"></span><span class="bar"></span>
			<?= Form::label('email', 'Email') ?>
		</div>

		<div class="group">
			
			<?= Form::password('password') ?>
			<span class="highlight"></span><span class="bar"></span>
			<?= Form::label('password', 'Password') ?>
		</div>
		
		<?= Form::submit('Register', ['class' => 'button buttonBlue']) ?>

		<?= Form::close() ?>


</div>