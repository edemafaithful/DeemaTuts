<?php include "inc/header.php"; ?>
<body class="bg-gray-100">
    <div class="min-h-screen flex justify-center items-center">
        <div class="w-full max-w-md">
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <h1 class="text-xl font-bold mb-5">Reset Password</h1>
                <p class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-2">An Email will be sent to you with instructions on how to reset your Password</p>
                <form action="inc/reset-request.php" method="POST" >
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="email">
                            Enter Email
                        </label>
                        <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="email" placeholder="Enter Your Email Address">
                    </div>
                    <div class="flex items-center justify-between">
                        <button name="reset-request-submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                            Reset Password
                        </button>
                    </div>
                </form>
            </div>
            <p class="text-center text-gray-500 text-xs">
                &copy;2023 Devfx. All rights reserved
            </p>
        </div>
    </div>
</body>
</html>
