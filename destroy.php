<?php
  // start or re use session
  session_start();
  
  // Raz array session
  $_SESSION = array();
  
  // Destroy session
  session_destroy();
  
  // Unset session
  unset($_SESSION);
?>
