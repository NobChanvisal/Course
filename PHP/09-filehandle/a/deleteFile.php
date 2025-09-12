<?php
   $file = "data.txt";

   if (unlink($file)) {
      echo "The file was deleted successfully.";
   } else {
      echo "The file could not be deleted.";
   }
?>