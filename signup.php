<?php 
    require "inc/header.php";
    require_once "inc/db_connect.php";
    # code update


    //To check if the form is Submitted
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
            return $data;
        }

        // recieve data from form
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm-password'];

        $success_message = "";
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                        
        // Validate username
        $errors = [];
        if (empty($_POST['username'])) {
            $errors[] = 'Username is required';
        } else {
            $username = test_input($_POST['username']);
            // Check if username only contains letters and numbers
            if (!preg_match("/^[a-zA-Z0-9]*$/",$username)) {
            $errors[] = 'Only letters and numbers are allowed in the username';            
            }
        }
        
        // Validate email
        if (empty($_POST['email'])) {
            $errors[] = 'Email is required';
        } else {
            $email = test_input($_POST['email']);
            // Check if email is valid
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Invalid email format';
            }
        }
        
        // Validate password
        if (empty($_POST['password'])) {
            $errors[] = 'Password is required';
        } else {
            $password = test_input($_POST['password']);
            // Check if password contains at least one uppercase letter, one lowercase letter, and one number
            if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/",$password)) {
            $errors[] = 'Password must contain at least one uppercase letter, one lowercase letter, and one number and be at least 8 characters long';
            }
        }
        
        // Validate confirm password
        if (empty($_POST['confirm-password'])) {
            $errors[] = 'Confirm password is required';
        } else {
            $confirm_password = test_input($_POST['confirm-password']);
            // Check if confirm password matches password
            if ($confirm_password != $password) {
                $errors[] = 'Confirm password must match password';
            }
        }

        if(empty($errors)){
            
            // Prepare SQL statement to insert user data
            $sql = 'INSERT INTO users (username, email, password) VALUES (:username, :email, :password)';
            $stmt = $conn->prepare($sql);
            // bind parameters
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $hashed_password);
            
            if($stmt->execute()){
                usleep(3000000);
                $success_message = "User Added Successfully";
                header("Location: login.php");
                
                
            }
        }else{
            // foreach ($errors as $error) {
            //     echo $error . '<br>';
            // }
            
        }
    
    }

 ?>

<body class="bg-gray-100">
    <div class="min-h-screen flex justify-center items-center">
        <div class="w-full max-w-md">
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <h1 class="text-2xl font-bold mb-6">Create an Account</h1>
                <!-- Display error messages -->
                <?php if (!empty($errors)): ?>
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <?php foreach ($errors as $error): ?>
                        <span class="block sm:inline"><?php echo $error; ?></span>
                    <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <!-- Display Success messages -->
                <?php if (!empty($success_message)): ?>
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                    
                        <span class="block sm:inline"><?php echo $success_message; ?></span>
                    
                    </div>
                <?php endif; ?>


                <form method="POST">
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="username">
                            Username
                        </label>
                        <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="username" type="text" placeholder="Username">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="email">
                            Email
                        </label>
                        <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="email" type="email" placeholder="Email">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="password">
                            Password
                        </label>
                        <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="password" type="password" placeholder="Password">
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-700 font-bold mb-2" for="confirm_password">
                            Confirm Password
                        </label>
                        <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="confirm-password" type="password" placeholder="Confirm Password">
                    </div>
                    <div class="flex items-center justify-between">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                            Register
                        </button>
                    </div>
                </form>
            </div>
            <p class="text-center text-gray-500 text-xs">
                &copy;2023 Devfx Corporation. All rights reserved.
            </p>
        </div>
    </div>
</body>
</html>
