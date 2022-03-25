<?php
    foreach (glob("images/*.jpg") as $filename) { 
        echo "<img src='$filename'><br> "; 
    }
?>