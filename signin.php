<?php
session_start();

require_once "./app/helpers.php";
require_once "./tpl/header.php";
if (isset($_POST['submit'])) {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = filter_input(INPUT_POST, 'password', FILTER_UNSAFE_RAW);
    if (!$email) {
        $errors['email'] = '* A valid email is required';
    } elseif (!$password) {
        $errors['password'] = '* A valid password is required';
    } else {
        $link = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PWD, MYSQL_DB);
        $email = mysqli_real_escape_string($link, $email);
        $password = mysqli_real_escape_string($link, $password);
        $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $result = mysqli_query($link, $sql);
        if ($result && mysqli_num_rows($result) === 1) {
            $user = mysqli_fetch_assoc($result);
            login_user($user['user_id'], $user['user_name'], './');
        } else {
            $errors['submit'] = '* Wrong email or password';
        }
    }
}
$page_title = "sign in";
include './tpl/header.php';
?>
<main class="container flex-fill">
    <section id="main-content-top">
        <div class="row">
            <div class="col-12 mt-5 text-center">
                <h1 class="display-3 text-primary">
                    sign in with your account
                </h1>
                <p class="text-wight-bold">
                    if u have more then 1 acc u can talk with your self in the blog section
                </p>
            </div>
        </div>
    </section>
    <section id="main-content">
        <div class="row mb-2">
            <div class="col-12 col-md-6 mx-auto">
                <form action="" method="POST" novalidate="novalidate" autocomplete="off">
                    <div class="form-group mt-3">
                        <label for="email">
                            <span class="text-danger me-1">*</span>Email
                        </label>
                        <input type="email" name="email" id="email" class="form-control">
                        <?= field_errors('email') ?>
                    </div>
                    <div class="form_group mt-3">
                        <label for="password">
                            <span class="text-danger me-1">*</span>Password
                        </label>
                        <input type="password" name="password" id="password" class="form-control">
                        <?= field_errors('password') ?>
                    </div>
                    <input type="submit" name="submit" value="Sign In" class="btn btn-primary mt-3">
                    <?= field_errors('submit') ?>
                </form>
            </div>
        </div>
    </section>
</main>

<?php include './tpl/footer.php' ?>