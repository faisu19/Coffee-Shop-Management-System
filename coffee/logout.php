<?php
session_start();
$_SESSION['username']='';
echo"<script>
                 alert('Logout Successful By By....!');
                 window.location.href='index.php';
                 </script>";

?>