<?php
    include "inc/header.php";
    require_once "inc/db_connect.php";
 ?>


  <!-- Main content -->
  <div class="container mx-auto py-10">
  <h1 class="text-4xl font-bold mb-4 text-center">Welcome to Devfx</h1>
  <p class="text-lg mb-6 text-center">We're an IT company dedicated to building a web development community.</p>
  <p class="text-lg text-center mb-2">Check out our latest projects:</p>

  <div class="flex flex-wrap justify-center my-10">
    <div class="w-full md:w-1/3 p-4">
      <div class="bg-white rounded-sm shadow-lg overflow-hidden">
        <img class="h-auto w-full" src="src/img/360_F_434993367_IXe3Awy09pB7uA4H7A63Rk1gJyOTGsAP.jpg" alt="Project 1">
        <div class="p-4">
          <h3 class="text-xl font-bold mb-2">Project 1</h3>
          <p class="text-lg mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <a href="#" class="text-blue-500">Learn more</a>
        </div>
      </div>
    </div>

    <div class="w-full md:w-1/3 p-4">
      <div class="bg-white rounded-sm shadow-lg overflow-hidden">
        <img class="h-auto w-full" src="src/img/Information-Technology-Business-World.jpg" alt="Project 2">
        <div class="p-4">
          <h3 class="text-xl font-bold mb-2">Project 2</h3>
          <p class="text-lg mb-2">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          <a href="#" class="text-blue-500">Learn more</a>
        </div>
      </div>
    </div>

    <div class="w-full md:w-1/3 p-4">
      <div class="bg-white rounded-sm shadow-lg overflow-hidden">
        <img class="h-auto w-full" src="src/img/Information-Technology.jpg" alt="Project 3">
        <div class="p-4">
          <h3 class="text-xl font-bold mb-2">Project 3</h3>
          <p class="text-lg mb-2">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          <a href="#" class="text-blue-500">Learn more</a>
        </div>
      </div>
    </div>
  </div>
</div>


<?php include "inc/footer.php" ?>
  
</body>

</html>
