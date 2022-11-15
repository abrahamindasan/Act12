<?php 
    require_once '../classes/faculty.class.php';
    session_start();
    if(isset($_SESSION['logged-in']) && $_SESSION['user_type'] == 'admin'){
        $faculty = new Faculty;
        $faculty->delete($_GET['id']);
        header('location: faculty.php');
    }
?>