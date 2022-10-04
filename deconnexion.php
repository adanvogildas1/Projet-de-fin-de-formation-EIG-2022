<!-- <h1>page de déconnexion</h1> -->
<?php
session_start();
unset($_SESSION['user']);
session_destroy();
header('Location:index.php');
