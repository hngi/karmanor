<?php
if (isset($_SESSION['userid'])) {
   echo '<p class="login-status">You are now logged in</p>';
   }
   else{
    echo '<p class="login-status">You are now logged out</p>';
   }
?>