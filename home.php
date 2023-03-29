<?php
    require "inc/header.php";
    
?>

<body class="bg-gray-50">
    <?php if (isset($_SESSION['username'])): ?>
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                You have successfully logged in as <?php echo $_SESSION['username']; ?>.
            </div>
    <?php endif; ?>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold mb-4">Welcome to My Site</h1>
        <p class="text-lg mb-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut magna euismod, tincidunt nunc non, suscipit nibh. Fusce dapibus, sapien eget pretium blandit, metus magna consectetur velit, quis sollicitudin nisl enim vel libero. Nulla facilisi. Donec cursus tellus quis consequat commodo.</p>
        <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Get Started</a>
    </div>
</body>