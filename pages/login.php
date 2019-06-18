<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php require_once 'partials/headers.php' ?>
</head>

<body>
<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <div class="login-brand">
                        <img src="../assets/img/stisla-fill.svg" alt="logo" width="100"
                             class="shadow-light rounded-circle">
                    </div>
					<?php if ( isset( $_SESSION['status'] ) ): ?>
                        <div class="alert alert-warning"><?php echo $_SESSION['status']->message ?></div>
						<?php unset( $_SESSION['status'] ) ?>
					<?php endif; ?>
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Login</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="model/user.php" class="needs-validation" novalidate="">
                                <div class="form-group">
                                    <label for="email">Username</label>
                                    <input id="email" type="text" class="form-control" name="username" tabindex="1"
                                           required autofocus>
                                    <div class="invalid-feedback">
                                        Please fill in your username
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="d-block">
                                        <label for="password" class="control-label">Password</label>
                                    </div>
                                    <input id="password" type="password" class="form-control" name="password"
                                           tabindex="2" required>
                                    <div class="invalid-feedback">
                                        please fill in your password
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="button" value="login"
                                            class="btn btn-primary btn-lg btn-block" tabindex="4">
                                        Login
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="simple-footer">
                        Copyright &copy; Stisla 2018
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include 'partials/js.php' ?>

<!-- Page Specific JS File -->
</body>
</html>
