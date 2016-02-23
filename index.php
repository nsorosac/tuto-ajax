<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Bootstrap 101 Template</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
	      integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

<div class="container">

	<div class="row">
		<div class="col-md-6">
			<form class="form-signin" id="login-form" method="post" action="login.php">
				<h2 class="form-signin-heading">Please sign in</h2>
				<div class="form-group">
					<label for="inputEmail" class="sr-only">Email address</label>
					<input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address"
					       required autofocus>
				</div>
				<div class="form-group">
					<label for="inputPassword" class="sr-only">Password</label>
					<input type="password" id="inputPassword" name="password" class="form-control"
					       placeholder="Password" required>
				</div>
				<div class="checkbox">
					<label>
						<input type="checkbox" value="1" name="remember"> Remember me
					</label>
				</div>
				<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
			</form>
		</div>
		<div class="col-md-6">
			<h3>News</h3>
			<div id="newsfeed" data-url="newsfeed.php"></div>
		</div>
	</div>

</div> <!-- /container -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
        crossorigin="anonymous"></script>

<script>

	(function ($) {

		$(document).ready(function () {

			var $login_form = $('#login-form');

			$login_form.on('submit', function (e) {

				e.preventDefault();

				$.post($login_form.attr('action'), $login_form.serialize(), function(response) {
					if (response.success && response.data) {
						location.href = response.data.redirect_to;
					} else {
						console.error('oula !');
					}
				}, 'json');

			});

			var $newsfeed = $('#newsfeed');

			$.get(
				$newsfeed.data('url'),
				function(response) {
					if (response.success && response.data) {
						var posts = response.data;
						$.each(posts, function (i, post) {
							$newsfeed.append('\
								<div class="list-group" id="opst-' + post.id + '">\
									<a href="#" class="list-group-item">\
										<h4 class="list-group-item-heading">' + post.title + '</h4>\
										<p class="list-group-item-text">' + post.content + '</p>\
									</a>\
								</div>\
							');
						});
					}
				},
				'json')

			.error(function(){
				$newsfeed.append('<div class="alert alert-danger">Flux indisponible</div>');
			});

		});

	})(window.jQuery);

</script>

</body>
</html>
