<?php

require __DIR__ . '/../src/bootstrap.php';

if (is_post_request()) {
    //...
}

?>

<?php view('header', ['title' => 'Register']); ?>

    <div class="container">
        <div class="row vh-100 justify-content-center align-items-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        Sign Up
                    </div>
                    <div class="card-body">
                        <form action="register.php" method="post">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username:</label>
                                <input type="text" name="username" class="form-control" id="username" placeholder="Enter your username" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email:</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password:</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password" required>
                            </div>
                            <div class="mb-3">
                                <label for="passwordConfirmation" class="form-label">Password Again:</label>
                                <input type="password" name="password2" class="form-control" id="passwordConfirmation" placeholder="Confirm your password" required>
                            </div>
                            <div class="form-check mb-3">
                                <input type="checkbox" name="agree" class="form-check-input" id="agreement" required>
                                <label class="form-check-label" for="agreement">I agree with the <a href="#">term of services</a></label>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Register</button>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        <p>Already a member? <a href="#">Login here</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php view('footer'); ?>