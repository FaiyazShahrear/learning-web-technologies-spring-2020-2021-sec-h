<?php
  session_start();
  setcookie('flag', true, time()-1, '/');
  session_destroy();
  header('location: ../view/login.html')
?>