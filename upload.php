<?php
     $uploaddir = 'uploads/';
     $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

// moves one location to another location
     if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
         echo "File is valid, and was successfully uploaded.\n";
     } else {
         echo "Possible file upload attack!\n";
     }

     echo 'Here is some more debugging info:';
     print_r($_FILES);
?>

<!-- when we upload a file were taking it from the machine and transfering it to the server -->
