<!DOCTYPE html>

<html>

	<head>
		<title>To Do Manager</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
		<link rel="stylesheet" href="css/app.css" type="text/css">
	</head>

	<body>

		<div class="full-container">

			@include ('partials.header')

		</div>

		<div class="container">

			@yield ('content')

		</div>

		<div class="full-container">

			@include ('partials.footer')

		</div>

	</body>

</html>