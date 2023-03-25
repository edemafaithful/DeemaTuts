<?php

    if(isset($_POST['reset-request.php'])){

        $selector = bin2hex(random_bytes(8));

        $token = random_bytes(32);

        $url = "";



    }else{
        header("Location: ../index.php");
    }

?>