<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link href='http://fonts.googleapis.com/css?family=Raleway:100,400,800' rel='stylesheet' type='text/css'>
	
	<link rel="stylesheet" href="/assets/css/style.css">
	<title>Finishr</title>
</head>


<body>
	<header>
		
		<ul class="flex flex-row flex-j-between flex-a-center">
			<li><a href="/home"><img src="/assets/img/gid.png" alt="" height="60"></a></li>
			

		<ul class="flex flex-row flex-j-between flex-a-center">
			<? if(Auth::is_logged_in()): ?>

				<li>Hi <?= Auth::user()->username ?></li>
				
				<? if(strpos($_SERVER['REQUEST_URI'], 'archive') !== false ): ?>
					<li><a href="/home" role="button" class="btn btn-success"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span> home</a></li>
				<? else: ?>
					<li><a href="/archive" role="button" class="btn btn-primary"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>  archive</a></li>
				<? endif; ?>
				<li><a href="/logout" class="logout">logout</a></li>
			<? endif; ?>
		</ul>
		</ul>

	</header>
