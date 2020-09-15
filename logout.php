<?php include_once 'core/session.php';

session_destroy();
header('location: index.php');
?>