<?php

require 'inc/header.php';
require 'inc/db_connect.php';

// define variables and set to empty values

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the input values from the form
    $identifier = trim($_POST['identifier']);
    $password = trim($_POST['password']);

    // Validate email
    if (empty($identifier)) {
        $errors[] = 'Email or Username is required';
    }

    // Validate password
    if (empty($password)) {
        $errors[] = 'Password is required';
    }

    if (empty($errors)) {
        // prepare Sql statement
        $sql =
            'SELECT * FROM users WHERE username = :identifier OR email = :identifier LIMIT 1';
        $stmt = $conn->prepare($sql);

        //bind parameters to sql statements
        $stmt->bindParam(':identifier', $identifier);
        $stmt->execute();

        // if ($stmt->rowCount() > 0) {

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            if (password_verify($password, $row['password'])) {
                // password correct? log in user
                session_start();
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['username'] = $row['username'];
                header('Location: home.php');
                exit();
            } else {
                $error = 'Invalid email/username or password.';
            }
        }
        // you need to uncomment this line in your branch
        else {
            $error = 'Invalid email/username or password.';
        }
    }
}
?>

<div class=" min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
  <div class="max-w-md w-full space-y-8">
        <div>
            <img class="mx-auto h-12 w-auto " src="src/img/download.png" alt="Logo">
            <h2 class="mt-6 text-center text-2xl font-bold text-gray-900 ">
                Sign in to your account
            </h2>
        </div>
        <?php if (isset($error)): ?>
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                <?php echo $error; ?>
            </div>
        <?php endif; ?>

        <?php if (isset($_SESSION['username'])): ?>
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                You have successfully logged in as <?php echo $_SESSION[
                    'username'
                ]; ?>.
            </div>
        <?php endif; ?>
        <form class="mt-8 space-y-6" method="POST">
            <input type="hidden" name="remember" value="true">
            <div class="rounded-sm shadow-sm -space-y-px">
                <div class="mb-4">
                    <label for="email-address" class="sr-only">Email or Username</label>
                    <input name="identifier" type="text" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-primary-500 focus:border-primary-500 focus:z-10 sm:text-sm" placeholder="Email Address or Username">
                </div>
                <div>
                    <label for="password" class="sr-only">Password</label>
                    <input name="password" type="password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-primary-500 focus:border-primary-500 focus:z-10 sm:text-sm" placeholder="Password">
                </div>
            </div>

            <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember_me" name="remember_me" type="checkbox" class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300 rounded">
                        <label for="remember_me" class="ml-2 block text-sm text-gray-900">
                            Remember me
                        </label>
                    </div>

                    <div class="text-sm">
                        <a href="reset_psd.php" class="font-medium text-primary-600 hover:text-primary-500">
                            Forgot your password?
                        </a>
                    </div>
            </div>
            <?php if (isset($_SESSION['username'])): ?>
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                     Logging in...
                </div>
            <?php endif; ?>


            <div class="flex items-center justify-between">
                <button type="submit" name="submit" class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Sign in <span class="spinner absolute right-0 mr-3"></span></button>
            </div>
        </form>
                                       
  </div>
</div> 
<script>
    const form = document.querySelector('form');
    const spinner = document.querySelector('.spinner');
    form.addEventListener('submit', (e) => {
    spinner.classList.add('animate-spin', 'opacity-75');
    form.querySelector('button').classList.add('pointer-events-none');
});

</script>

<?php include 'inc/footer.php'; ?>

