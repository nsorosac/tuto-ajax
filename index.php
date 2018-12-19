<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tuto AJAX</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
              integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" href="css/index.css">
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

                    <hr>

                    <div id="remote" data-url="http://127.0.0.1/tuto-ajax/remote.php"></div>

                </div>

                <div class="col-md-6">
                    <h3>News</h3>
                    <ul class="media-list" id="newsfeed" data-url="newsfeed.php"></ul>
                </div>

            </div>

        </div> <!-- /container -->

        <div id="alerts"></div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
                integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
                crossorigin="anonymous"></script>
        <script src="js/index.js"></script>

    </body>

</html>
